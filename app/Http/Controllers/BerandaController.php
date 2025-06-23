<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;

use App\Models\Beranda;
use App\Models\Pimpinan;
use App\Models\TeksIklan;
use App\Models\Fakultas;
use App\Models\KerjaSama;

class BerandaController extends Controller
{
    public function index()
    {
        $beranda = Beranda::first();
        $pimpinanSpeech = Pimpinan::where('status', 'Rektor')->first();
        $teksIklans = TeksIklan::all();
        $fakultasItems = Fakultas::all();
        $kerjasamaItems = KerjaSama::all();

        // Instagram API
        $accessToken = "IGAATbwoxOXjBBZAE5rc3Joampha0xEMEFyQUhZAS3U3bEFLbG5qV09TMVQ4T0dtUGJTU0JVT05jeG1xeW5qalBYR3JSdGZAPa0Nub1BaREJEdDBlSVdWTHhIR0pjcW1lU01nMVRlc3pIckZAYa2llZAjRKMjRVN2FodlBYc0x3Y3NWcwZDZD"; // Ganti dengan token Instagram kamu
        $instagramUserId = "17841407158183996"; // Ganti dengan User ID Instagram kamu

        $response = Http::get("https://graph.instagram.com/{$instagramUserId}/media", [
            'fields' => 'id,caption,media_type,media_url,permalink,thumbnail_url,timestamp',
            'access_token' => $accessToken
        ]);

        $instagramPosts = collect($response->json()['data'] ?? []);

        // Cek apakah semua data memiliki timestamp
        foreach ($instagramPosts as $post) {
            if (!isset($post['timestamp'])) {
            }
        }

        // Filter postingan tanpa timestamp dan urutkan berdasarkan waktu terbaru
        $sortedInstagramPosts = $instagramPosts
            ->filter(fn($post) => isset($post['timestamp']))
            ->sortByDesc(fn($post) => strtotime($post['timestamp']))
            ->take(10)
            ->values();

        return view('index', compact('beranda', 'pimpinanSpeech', 'teksIklans', 'fakultasItems', 'kerjasamaItems', 'sortedInstagramPosts'));
    }
}
