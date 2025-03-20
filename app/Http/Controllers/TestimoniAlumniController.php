<?php

namespace App\Http\Controllers;

use App\Models\TestimoniAlumni;
use App\Models\TestimoniUtama;
use App\Models\Fakultas;
use Illuminate\Http\Request;

class TestimoniAlumniController extends Controller
{
    public function index()
    {
        // Ambil data testimoni beserta relasi fakultas dan prodi
        $testimoniUtama = TestimoniUtama::first();
        $testimoniItems = TestimoniAlumni::with(['fakultas', 'programStudi'])->get();
        $fakultasItems = Fakultas::all();
        // Kirim data ke view
        return view('testimoni', compact('testimoniUtama', 'testimoniItems', 'fakultasItems'));
    }
}
