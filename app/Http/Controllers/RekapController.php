<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAjaran;
use App\Pembayaran;
use App\Kelas;
use App\Kartu;
use App\Siswa;
use PDF;
use DB;
class RekapController extends Controller
{
    public function index()
    {
        $minta = Pembayaran::join('siswa','siswa.id_siswa','=','pembayaran.id_siswa')->where('status','=','Belum Dikonfirmasi')->get();
        $tahun = TahunAjaran::all();
        $kelas = Kelas::all();
        $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
        return view('laporan.home',compact('tahun','kelas','bulan','minta'));
    }

    public function lihat(Request $request)
    {
        $lihat = Kartu::join('siswa', 'siswa.id_siswa','=','kartu.id_siswa')->join('kelas','siswa.id_kelas','=','kelas.id_kelas')->join('tahun_ajaran','kartu.id_tahun','=','tahun_ajaran.id_tahun')->where('status','=','Lunas')->whereBetween('tanggal', [$request->mulai, $request->sampai])->get();
        $duwit = Kartu::join('siswa', 'siswa.id_siswa','=','kartu.id_siswa')->join('kelas','siswa.id_kelas','=','kelas.id_kelas')->join('tahun_ajaran','kartu.id_tahun','=','tahun_ajaran.id_tahun')->where('status','=','Lunas')->whereBetween('tanggal', [$request->mulai, $request->sampai])->sum('nominal');
        $pdf = PDF::loadview('laporan/lapor',compact('lihat','duwit'));
        $pdf->setPaper('a4','potrait');
        return $pdf->stream();
        // return view('laporan.lapor', compact('lihat'));
    }
    public function kelas(Request $request)
    {
        $lihat = Kartu::join('siswa', 'siswa.id_siswa','=','kartu.id_siswa')->join('kelas','siswa.id_kelas','=','kelas.id_kelas')->join('tahun_ajaran','tahun_ajaran.id_tahun','=','kartu.id_tahun')->where('kartu.bulan', '=',$request->bulan)->where('kelas.id_kelas','=', $request->kelas)->where('kartu.id_tahun', '=', $request->ajaran)->get();
        $duwit = Kartu::join('siswa', 'siswa.id_siswa','=','kartu.id_siswa')->join('kelas','siswa.id_kelas','=','kelas.id_kelas')->join('tahun_ajaran','tahun_ajaran.id_tahun','=','kartu.id_tahun')->where('kartu.bulan', '=',$request->bulan)->where('kelas.id_kelas','=', $request->kelas)->where('status','!=','Lunas')->where('kartu.id_tahun', '=', $request->ajaran)->sum('nominal');
        $pdf = PDF::loadview('laporan/ckelas', compact('lihat','duwit'));
        $pdf->setPaper('a4','potrait');
        return $pdf->stream();
    }
}
