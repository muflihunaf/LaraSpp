<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAjaran;
use App\Kelas;
use App\Kartu;
use App\Siswa;
use PDF;
class RekapController extends Controller
{
    public function index()
    {
        $tahun = TahunAjaran::all();
        $kelas = Kelas::all();
        
        return view('laporan.home',compact('tahun','kelas'));
    }

    public function lihat(Request $request)
    {
        $lihat = Kartu::whereBetween('tanggal', [$request->mulai, $request->sampai])->get();
        $pdf = PDF::loadview('laporan/lapor',compact('lihat'));
        $pdf->setPaper('a4','potrait');
        return $pdf->stream();
        // return view('laporan.lapor', compact('lihat'));
    }
    public function store(Request $request)
    {   
        $la = new Siswa;
        
    }
}
