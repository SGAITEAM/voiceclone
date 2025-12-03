<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TranslationSession;


class VoiceController extends Controller
{
    public function index()
    {
        // return view('voice');
        $session = TranslationSession::createForUser(auth()->id());

        return view('voice', [
            'session_id' => $session->session_id,
        ]);
    }

    public function mirror($session_id)
    {
        return view('mirror', [
            'session_id' => $session_id
        ]);
    }

    public function simultane()
    {
        return view('voice_simultane');
    }
}
