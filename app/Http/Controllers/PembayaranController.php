<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
Use App\Kelas;
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
        
        return view('bayar.daftar',compact('siswa'));
    }

}
