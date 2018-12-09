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
        $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
        return view('laporan.home',compact('tahun','kelas','bulan'));
    }

    public function lihat(Request $request)
    {
        $lihat = Kartu::join('siswa', 'siswa.id_siswa','=','kartu.id_siswa')->join('kelas','siswa.id_kelas','=','kelas.id_kelas')->join('tahun_ajaran','kartu.id_tahun','=','tahun_ajaran.id_tahun')->whereBetween('tanggal', [$request->mulai, $request->sampai])->get();
        $pdf = PDF::loadview('laporan/lapor',compact('lihat'));
        $pdf->setPaper('a4','potrait');
        return $pdf->stream();
        // return view('laporan.lapor', compact('lihat'));
    }
    public function kelas(Request $request)
    {
        $lihat = Kartu::join('siswa', 'siswa.id_siswa','=','kartu.id_siswa')->join('kelas','siswa.id_kelas','=','kelas.id_kelas')->join('tahun_ajaran','kartu.id_tahun','=','tahun_ajaran.id_tahun')->where('kelas.id_kelas','=',[$request->kelas])->where('kartu.bulan','=',[$request->bulan])->get();
        dd($lihat);
    }
}
