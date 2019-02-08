<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;
use App\Pembayaran;
use Excel;
use Alert;

use DB;
class SiswaController extends Controller
{
    public function home()
    {
        $siswa = DB::table('siswa')
        ->join('kelas', 'siswa.id_kelas', '=','kelas.id_kelas')
        ->select('siswa.*','kelas.*')
        ->get();
        $status = 'Belum Dikonfirmasi';
        $notif = Pembayaran::where('status','=',$status)->get();

        $kelas = Kelas::all();

        return view('siswa/home', compact('siswa','kelas','notif'));
    }
    public function export()
    {
        $siswa = Siswa::select('nisn','nama','id_kelas')->get();
        return Excel::create('data_siswa', function($excel) use ($siswa)
        {
            $excel->sheet('mysheet', function($sheet) use ($siswa)
            {
                $sheet->fromArray($siswa);
            });
        })->download('xls');
    }

    public function tambah()
    {
        $kelas = Kelas::all();
        
        return view('siswa.tambah',compact('kelas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|numeric|unique:siswa',
            'nama' => 'required|min:5',
            'kelas' => 'required',
        ]);
        
        $siswa = new Siswa;
        $siswa->nisn = $request->nisn;
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->kelas;
        $siswa->password = bcrypt($request->nisn);
        $siswa->save();
        Alert::success('Success ', 'Berhasil Menambah Data');
        return redirect(route('siswa'));

    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        return view('siswa.edit', compact('siswa','kelas'));
    }
    public function update(Request $request, $id)
    {
        if ($id){
            $siswa = Siswa::find($id);
            $siswa->nisn = $request->nisn;
            $siswa->nama = $request->nama;
            $siswa->id_kelas = $request->kelas;
            $siswa->save();
            Alert::success('Success ', 'Berhasil Mengubah Data');
        }

        return redirect()->route('siswa');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);

        if ($siswa) {
            $siswa->delete();
            Alert::success('Success ', 'Berhasil Menghapus Data');
            return redirect(route('siswa'));
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
                        $siswa->password = bcrypt($value->nisn);
                        $siswa->save();
                    }
                }
            Alert::success('Success ', 'Berhasil Menghapus Data');
        }
        return back();
    }

}
