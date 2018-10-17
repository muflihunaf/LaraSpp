<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;
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
        $kartu = Kartu::where('id_siswa','=',$siswa->id_siswa,'AND', 'status','=','Belum Dibayar')->get();
        return view('bayar.daftar',compact('siswa','kartu'));
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
            $kartu->save();
        }
        return redirect()->back();
    }
    public function lunas(Request $request,$id)
    {
        $siswa = Siswa::find($id);
        $bayar = new Pembayaran;

    }

}
