<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kartu;
use App\TahunAjaran;
use PDF;

class UsersiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:siswa');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.home');
    }
    public function lihat($id)
    {
        $siswa = Siswa::find($id)->join('kelas','kelas.id_kelas', '=', 'siswa.id_kelas')->where('siswa.id_siswa', '=', $id)->first();
        $kartu = Kartu::join('tahun_ajaran','kartu.id_tahun','=','tahun_ajaran.id_tahun')->where('id_siswa', '=', $id)->get();
        $tahun = TahunAjaran::all();
        return view('user.lihat',compact('siswa','kartu','tahun'));
    }
    public function cetak($id)
    {
        $cetak = Kartu::find($id)->join('siswa','siswa.id_siswa','=','kartu.id_siswa')->join('tahun_ajaran','kartu.id_tahun','=','tahun_ajaran.id_tahun')->where('id_kartu','=',$id)->get();
        $pdf = PDF::loadview('laporan/cetak',compact('cetak'));
        $pdf->setPaper('a4','potrait');

        return $pdf->stream();
    }
}
