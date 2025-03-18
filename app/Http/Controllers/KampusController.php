<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FasilitasUtama;
use App\Models\Kampus;
use App\Models\Fakultas;

class KampusController extends Controller
{
    public function index()
    {
        // Mengambil semua data kampus
        $fasilitasUtama = FasilitasUtama::first();
        $fakultasItems = Fakultas::all();
        $kampuses = Kampus::all();

        
        
        return view('fasilitas', compact('fasilitasUtama', 'fakultasItems','kampuses'));
    }


    public function show($id)
    {
        $kampus = Kampus::with('fasilitas')->findOrFail($id);
        $fakultasItems = Fakultas::all();
        return view('detail-fasilitas', compact('kampus', 'fakultasItems'));
    }

}
