<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeminiService
{
    protected string $apiKey;
    protected string $endpoint;

    public function __construct()
    {
        $this->apiKey = config('services.gemini.key');

        $this->endpoint =
            'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent';
    }

    public function generateMotivation(string $mood): string
    {
        $response = Http::post(
            $this->endpoint . '?key=' . $this->apiKey,
            [
                'contents' => [
                    [
                        'parts' => [
                            [
                                'text' => "Berikan kalimat motivasi singkat, empatik, dan tidak menggurui untuk seseorang yang sedang merasa $mood. satu kalimat saja"
                            ]
                        ]
                    ]
                ]
            ]
        );

        if ($response->failed()) {
            dd(
                'STATUS', $response->status(),
                'BODY', $response->json()
            );
        }

        return data_get(
            $response->json(),
            'candidates.0.content.parts.0.text',
            'Tidak ada respon dari AI'
        );
    }
}
