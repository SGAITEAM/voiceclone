from flask import Flask, request, jsonify
from flask_cors import CORS
from openai import OpenAI
import os
from dotenv import load_dotenv

load_dotenv()
client = OpenAI(api_key=os.getenv("OPENAI_API_KEY"))

app = Flask(__name__)
CORS(app)   # <-- ÖNEMLİ

@app.post("/stt")
def stt():
    if "audio" not in request.files:
        return jsonify({"error": "audio file required"}), 400

    file_storage = request.files["audio"]
    audio_bytes = file_storage.read()

    # 1) STT (Türkçe transkript)
    stt_result = client.audio.transcriptions.create(
        model="gpt-4o-mini-transcribe",
        file=("chunk.wav", audio_bytes),
        language="tr",
        temperature=0
    )
    tr_text = stt_result.text.strip()

    # Eğer boşsa çeviri yapmayalım
    if not tr_text:
        return jsonify({"text": "", "translated": ""})

    # 2) Translate to English
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

@app.post("/stt_translate")
def stt_translate():
    if "audio" not in request.files:
        return jsonify({"error": "No audio"}), 400

    file_storage = request.files["audio"]
    audio_bytes = file_storage.read()

    # 1) STT (TR)
    stt_result = client.audio.transcriptions.create(
        model="gpt-4o-mini-transcribe",
        file=("speech.wav", audio_bytes),
        language="tr",
        temperature=0
    )

    tr_text = stt_result.text.strip()

    # 2) Translate → EN
    translate_result = client.chat.completions.create(
        model="gpt-4o-mini",
        messages=[
            {"role": "system", "content": "Translate the Turkish text to English."},
            {"role": "user", "content": tr_text}
        ],
        temperature=0
    )
    en_text = translate_result.choices[0].message.content.strip()

    # 3) (Opsiyonel) TTS → English Voice
    # Şu an kapalı, istersen açarız.
    # tts_audio = client.audio.speech.create(...)

    return jsonify({
        "text": tr_text,
        "translated": en_text,
        "tts_audio": None
    })

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

    # 3) TTS (yeni API)
    tts_result = client.audio.speech.create(
        model="gpt-4o-mini-tts",
        voice="alloy",
        input=en_text
    )

    # ❗ En önemli kısım: bytes almak için .read() gerekli!
    audio_raw = tts_result.read()

    import base64
    audio_b64 = base64.b64encode(audio_raw).decode("utf-8")

    return jsonify({
        "text": tr_text,
        "translated": en_text,
        "tts_audio_base64": audio_b64
    })


    try:
        audio_bytes = request.data
        if not audio_bytes:
            return jsonify({"error": "Empty audio chunk"}), 400

        # 1) STT → TR
        stt_result = client.audio.transcriptions.create(
            model="gpt-4o-mini-transcribe",
            file=("chunk.wav", audio_bytes),
            language="tr",
            temperature=0
        )

        tr_text = stt_result.text.strip()

        # Eğer chunk boş geldiyse çeviri yapma
        if tr_text == "":
            return jsonify({
                "partial_text": "",
                "partial_translated": ""
            })

        # 2) Translate (TR → EN)
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
            "partial_text": tr_text,
            "partial_translated": en_text
        })

    except Exception as e:
        return jsonify({"error": str(e)}), 500


if __name__ == "__main__":
    app.run(host="127.0.0.1", port=5001, debug=True)
