<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fakultas;
use App\Models\BeasiswaUtama;
use App\Models\Beasiswa;

class BeasiswaController extends Controller
{
    public function index()
    {
        $fakultasItems = Fakultas::all();
        $beasiswaUtamaItems = BeasiswaUtama::first();
        $beasiswaItems = Beasiswa::all();
        return view('beasiswa', compact('fakultasItems', 'beasiswaUtamaItems', 'beasiswaItems'));
    }

    public function show($id)
    {
        $beasiswaItem = Beasiswa::findOrFail($id); // Pakai singular buat item detail
        $fakultasItems = Fakultas::all();
        $beasiswaUtamaItems = BeasiswaUtama::first();
        return view('detail-beasiswa', compact('fakultasItems', 'beasiswaUtamaItems', 'beasiswaItem'));
    }

}
