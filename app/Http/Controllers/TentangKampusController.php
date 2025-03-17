<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangKampus;
use App\Models\VisiMisiTujuan;
use App\Models\Pimpinan;
use App\Models\StrukturOrganisasi;
use App\Models\KerjaSama;

class TentangKampusController extends Controller
{
    public function index()
    {
        $tentangKampusItems = TentangKampus::first();
        $visiMisiTujuanItems = VisiMisiTujuan::first();
        $pimpinanRektorItems = Pimpinan::where('status', 'Rektor')->first();
        $pimpinanKetuaSenatItems = Pimpinan::where('status', 'Ketua Senat')->first();
        $pimpinanWakilRektorItems = Pimpinan::whereIn('status', ['Wakil Rektor I', 'Wakil Rektor II', 'Wakil Rektor III'])->get();
        $pimpinanDekanItems = Pimpinan::where('status', 'Dekan')
        ->with('fakultas') // Ambil data fakultas terkait
        ->get();

        $strukturOrganisasiItems = StrukturOrganisasi::first();
        $kerjaSamaItems = KerjaSama::all();
        return view('tentang-kampus', compact('tentangKampusItems', 'visiMisiTujuanItems', 'pimpinanRektorItems', 'pimpinanKetuaSenatItems', 'pimpinanWakilRektorItems', 'pimpinanDekanItems', 'strukturOrganisasiItems', 'kerjaSamaItems'));
    }
}
