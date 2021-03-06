<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use Alert;
class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();

        return view('kelas/home', compact('kelas'));
    }
    public function store(Request $request)
    {
        $baru = new Kelas;
        $baru->kelas = $request->kelas;
        $baru->jurusan = $request->jurusan;
        $baru->save();
        Alert::success('Berhasil', 'Berhasil Menambahkan Data');
        return redirect()->route('home.kelas');
    }
    public function destroy($id)
    {
        $hapus = Kelas::find($id);

        if ($hapus) {
            $hapus->delete();
            Alert::success('Berhasil', 'Berhasil Menghapus Data');
            return redirect()->route('home.kelas');
        }
    }
    public function ubah($id)
    {
        $kelas = Kelas::find($id);

        return view('kelas/ubah',compact('kelas'));
    }
    public function update(Request $request, $id)
    {
        $ubah = Kelas::find($id);
        $ubah->kelas = $request->kelas;
        $ubah->jurusan = $request->jurusan;
        $ubah->save();
        return redirect('/kelas');
    }
}
