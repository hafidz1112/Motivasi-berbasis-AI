<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Services\GeminiService;

class MoodController extends Controller
{
    protected GeminiService $gemini;

    public function __construct(GeminiService $gemini)
    {
        $this->gemini = $gemini;
    }

    public function store(Request $request)
    {
        // VALIDASI MOOD
        $request->validate([
            'mood' => 'required|in:senang,sedih,marah,lelah,biasa,kecewa,cemas'
        ]);

        $mood = $request->mood;

        // PANGGIL GEMINI
        $motivasi = $this->gemini->generateMotivation($mood);

        // SIMPAN KE SESSION
        Session::put('mood', $mood);
        Session::put('motivasi', $motivasi);

        return redirect()->route('motivasi.result');
    }

    public function result()
    {
        // AMAN JIKA SESSION HILANG
        if (!session()->has('motivasi')) {
            return redirect()->route('mood');
        }

        return view('hasil-motivasi', [
            'mood' => session('mood'),
            'motivasi' => session('motivasi'),
        ]);
    }
}
