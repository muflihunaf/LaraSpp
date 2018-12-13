<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAjaran;
class TahunController extends Controller
{
    public function index()
    {
        $tahun = TahunAjaran::all();

        return view('tahun.home',compact('tahun'));
    }
    public function store(Request $request)
    {
        $tahun = new TahunAjaran;
        $tahun->tahun = $request->tahun;
        $tahun->nominal = $request->nominal;
        $tahun->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $tahun = TahunAjaran::find($id);

        return view('tahun/edit',compact('tahun'));
    }
    public function update(Request $request, $id)
    {
        $tahun = TahunAjaran::find($id);

        $tahun->tahun = $request->tahun;
        $tahun->nominal = $request->nominal;
        $tahun->save();

        return redirect()->route('home.tahun');
    }

    public function hapus($id)
    {
        $tahun = TahunAjaran::find($id);

        if ($tahun){
            $tahun->delete();
            return redirect()->route('home.tahun');
        }
    }
}
