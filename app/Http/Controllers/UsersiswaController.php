<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\TahunAjaran;
use App\Pembayaran;
use App\Siswa;
use App\Kartu;
use PDF;
use Alert;

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
    public function bayar($id)
    {
        $status = 'Belum Dibayar';
        $bulan = Kartu::where('id_siswa','=',$id)->where('status','=',$status)->get();
        return view('user.bayar',compact('bulan'));
    }
    public function trans(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nominal' => 'required|Numeric'
        ]);
        $fileName = time() . '.png';
        $bayar = new Pembayaran;
        $bayar->id_siswa = $request->id_siswa;
        $bayar->nama_pengirim = $request->nama;
        $bayar->nominal = $request->nominal;
        $bayar->tanggal = $request->tanggal;
        $bayar->gambar = $request->file('gambar')->storeAs('public/images', $fileName);
        $bayar->bulan = $request->bulan . '-' . $request->bulan2;
        $bayar->status = 'Belum Dikonfirmasi';
        $bayar->save();
        Alert::success('Berhasil', 'Permintaan Sedang Diproses');
        return redirect()->route('user.home');
    }
    public function confirm(Request $request,$id)
    {
        $pembayar = Pembayaran::find($id);
        $pembayar->status = 'Dikonfirmasi';
        $pembayar->save();
        Alert::success('Berhasil', 'Data Sukses Diproses');
        return redirect()->route('rekap');
    }
}
