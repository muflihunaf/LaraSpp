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
}
