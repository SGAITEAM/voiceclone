from flask import Flask, request, jsonify
from flask_cors import CORS
from openai import OpenAI
import os
from dotenv import load_dotenv

from flask_socketio import SocketIO, join_room, emit

load_dotenv()
client = OpenAI(api_key=os.getenv("OPENAI_API_KEY"))

app = Flask(__name__)
CORS(app)   # CORS tüm API uçları için açık

# Socket.IO server
socketio = SocketIO(app, cors_allowed_origins="*")


# =====================================================
#  STT CHUNK ENDPOINT
# =====================================================
@app.post("/stt")
def stt():
    if "audio" not in request.files:
        return jsonify({"error": "audio file required"}), 400

    audio_bytes = request.files["audio"].read()

    stt_result = client.audio.transcriptions.create(
        model="gpt-4o-mini-transcribe",
        file=("chunk.wav", audio_bytes),
        language="tr",
        temperature=0
    )

    tr_text = stt_result.text.strip()

    if not tr_text:
        return jsonify({"text": "", "translated": ""})

    translate_result = client.chat.completions.create(
        model="gpt-4o-mini",
        messages=[
            {"role": "system", "content": "Translate the following Turkish text into natural English."},
            {"role": "user", "content": tr_text}
        ],
        temperature=0
    )

    en_text = translate_result.choices[0].message.content.strip()

    return jsonify({
        "text": tr_text,
        "translated": en_text
    })


# =====================================================
#  FULL TRANSLATE (NO TTS)
# =====================================================
@app.post("/stt_translate")
def stt_translate():
    if "audio" not in request.files:
        return jsonify({"error": "No audio"}), 400

    audio_bytes = request.files["audio"].read()

    stt_result = client.audio.transcriptions.create(
        model="gpt-4o-mini-transcribe",
        file=("speech.wav", audio_bytes),
        language="tr",
        temperature=0
    )

    tr_text = stt_result.text.strip()

    translate_result = client.chat.completions.create(
        model="gpt-4o-mini",
        messages=[
            {"role": "system", "content": "Translate the Turkish text to English."},
            {"role": "user", "content": tr_text}
        ],
        temperature=0
    )

    en_text = translate_result.choices[0].message.content.strip()

    return jsonify({
        "text": tr_text,
        "translated": en_text,
        "tts_audio": None
    })


# =====================================================
#  FULL TRANSLATE + TTS ENDPOINT
# =====================================================
@app.post("/stt_translate_tts")
def stt_translate_tts():
    if "audio" not in request.files:
        return jsonify({"error": "No audio"}), 400

    audio_bytes = request.files["audio"].read()

    # 1) STT
    stt_result = client.audio.transcriptions.create(
        model="gpt-4o-mini-transcribe",
        file=("speech.wav", audio_bytes),
        language="tr"
    )
    tr_text = stt_result.text.strip()

    # 2) Translate
    translate_result = client.chat.completions.create(
        model="gpt-4o-mini",
        messages=[
            {"role": "system", "content": "Translate into natural English."},
            {"role": "user", "content": tr_text}
        ]
    )
    en_text = translate_result.choices[0].message.content.strip()

    # 3) TTS (bytes)
    tts_result = client.audio.speech.create(
        model="gpt-4o-mini-tts",
        voice="alloy",
        input=en_text
    )
    audio_raw = tts_result.read()

    import base64
    audio_b64 = base64.b64encode(audio_raw).decode("utf-8")

    return jsonify({
        "text": tr_text,
        "translated": en_text,
        "tts_audio_base64": audio_b64
    })


# =====================================================
#  SOCKET.IO EVENTS (ROOM VE TEST OLAYLARI)
# =====================================================
@socketio.on('connect')
def handle_connect():
    print('🔌 Client connected:', request.sid)
    emit('server_hello', {'msg': 'Connected to Python Socket.IO server ✅'})


@socketio.on('disconnect')
def handle_disconnect():
    print('🔌 Client disconnected:', request.sid)


@socketio.on('joinSession')
def handle_join_session(data):
    session_id = data.get('session_id')
    if not session_id:
        return

    join_room(session_id)
    print(f'👥 Client {request.sid} joined room {session_id}')

    emit('server_hello', {'msg': f'Joined room {session_id}'}, to=session_id)


@socketio.on("final_text")
def handle_final_text(data):
    session_id = data.get("session_id")
    text = data.get("text")

    if session_id:
        emit("final_text", {"text": text}, to=session_id)


@socketio.on("final_tts")
def handle_final_tts(data):
    session_id = data.get("session_id")
    audio_base64 = data.get("audio_base64")

    if session_id:
        emit("final_tts", {"audio_base64": audio_base64}, to=session_id)



# =====================================================
#  SERVER RUN (socketio)
# =====================================================
if __name__ == "__main__":
    socketio.run(app, host="127.0.0.1", port=5001, debug=True)
