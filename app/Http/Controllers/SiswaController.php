<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Excel;
use DB;
class SiswaController extends Controller
{
    public function home()
    {
        $siswa = DB::table('siswa')
        ->join('kelas', 'siswa.id_kelas', '=','kelas.id_kelas')
        ->select('siswa.*','kelas.*')
        ->get();

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
        $siswa->id_kelas = $request->kelas;
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

    public function import(Request $request)
    {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path, function($reader){})->get();
                if (!empty($data) && $data->count()) {
                    foreach ($data as $key => $value) {
                        $siswa = new Siswa;
                        $siswa->nisn = $value->nisn;
                        $siswa->nama = $value->nama;
                        $siswa->id_kelas = $value->id_kelas;
                        $siswa->save();
                    }
                }
        }
        return back();
    }

}
