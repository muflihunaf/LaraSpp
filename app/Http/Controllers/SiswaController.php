<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Excel;
class SiswaController extends Controller
{
    public function home()
    {
        $siswa = Siswa::all();

        return view('siswa/home', compact('siswa'));
    }
    public function export()
    {
        $siswa = Siswa::select('nisn','nama','kelas','jurusan')->get();
        return Excel::create('data_siswa', function($excel) use ($siswa)
        {
            $excel->sheet('mysheet', function($sheet) use ($siswa)
            {
                $sheet->fromArray($siswa);
            });
        })->download('xls');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|numeric',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);
        
        $siswa = new Siswa;
        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->jurusan = $request->jurusan;
        $siswa->save();

        return redirect(route('home'));

    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);

        if ($siswa) {
            $siswa->delete();
            return redirect(route('home'));
        }

    }

}
