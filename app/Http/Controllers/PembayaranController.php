<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;
use App\TahunAjaran;
use App\Siswa;
Use App\Kelas;
use App\Kartu;
use DB;

class PembayaranController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')
        ->select('siswa.*','kelas.*')
        ->join('kelas','kelas.id_kelas', '=', 'siswa.id_kelas')
        ->get();

        return view('bayar/index', compact('siswa'));
    }


    public function daftar($id)
    {
        $siswa = Siswa::find($id)->join('kelas','kelas.id_kelas', '=', 'siswa.id_kelas')->where('siswa.id_siswa', '=', $id)->first();
        $kartu = Kartu::join('tahun_ajaran','kartu.id_tahun','=','tahun_ajaran.id_tahun')->where('id_siswa','=',$siswa->id_siswa)->get();
        $tahun = TahunAjaran::all();
        return view('bayar.daftar',compact('siswa','kartu','tahun'));
    }

    public function ulang(Request $request, $id)
    {
        $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
        $siswa = Siswa::find($id);
        for ($i=0; $i < 12; $i++) { 
            $kartu = new Kartu;
            $kartu->bulan = $bulan[$i];
            $kartu->status = 'Belum Dibayar';
            $kartu->id_siswa = $siswa->id_siswa;
            $kartu->id_tahun = $request->id_tahun;
            $kartu->tanggal = date('Y-m-d');
            $kartu->save();
        }
        return redirect()->back();
    }
    public function lunas(Request $request,$id)
    {
        $bayar = Kartu::find($id);
        $bayar->status = 'Lunas';
        $bayar->tanggal = date('Y-m-d');
        $bayar->save();
        
        return redirect()->back();
    }

}
