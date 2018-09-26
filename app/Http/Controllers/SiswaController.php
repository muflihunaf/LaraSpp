<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class SiswaController extends Controller
{
    public function home()
    {
        $siswa = Siswa::all();

        return view('siswa/home', compact('siswa'));
    }
}
