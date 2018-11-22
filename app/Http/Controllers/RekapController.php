<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAjaran;
use App\Kelas;
use App\Kartu;
use App\Siswa;
class RekapController extends Controller
{
    public function index()
    {
        $tahun = TahunAjaran::all();
        $kelas = Kelas::all();
        
        return view('laporan.home',compact('tahun','kelas'));
    }

    public function lihat()
    {
        # code...
    }
    public function store(Request $request)
    {   
        $la = new Siswa;
        
    }
}
