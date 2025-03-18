<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DisplayFakultas;
use App\Models\Fakultas;
use App\Models\FakultasDetail;

class FakultasController extends Controller
{
    public function index(){
        // Fakultas Utama
        $fakultasItems = Fakultas::all();
        $fakultasUtamaItems = DisplayFakultas::first();
        $fakultasUtamaFST = Fakultas::where('nama_fakultas', 'Fakultas Sains dan Teknologi')
        ->first();
        $fakultasUtamaFISB = Fakultas::where('nama_fakultas', 'Fakultas Ilmu Sosial dan Bisnis')
        ->first();
        $fakultasUtamaPasca = Fakultas::where('nama_fakultas', 'Fakultas Pascasarjana')
        ->first();
        $fakultasUtamaVokasi = Fakultas::where('nama_fakultas', 'Fakultas Vokasi')
        ->first();
        $fakultasUtamaSD = Fakultas::where('nama_fakultas', 'Fakultas Seni dan Desain')
        ->first();

        return view('fakultas/fakultas', compact('fakultasItems', 'fakultasUtamaItems', 'fakultasUtamaFST', 'fakultasUtamaFISB', 'fakultasUtamaPasca', 'fakultasUtamaVokasi', 'fakultasUtamaSD'));
    }

    public function show($id)
{
    $fakultasItems = Fakultas::all();
    $fakultas = Fakultas::with(['dekan', 'programStudi', 'daftarKaprodi'])->findOrFail($id);
    
    return view('fakultas.detail-fakultas', compact('fakultasItems', 'fakultas'));
}




}
