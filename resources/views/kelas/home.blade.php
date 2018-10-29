@extends('templates.index')

@section('content')
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#lihat"> Tambah Kelas </button>
        @include('kelas/tambah')
    <table class="table table-bordered" id="siswa">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Kelas</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($kelas as $list)
                
            
            <tr>
                <td> {{ $no++ }} </td>
                <td> {{ $list->id_kelas }} </td>
                <td> {{ $list->kelas }} </td>
                <td> {{ $list->jurusan }} </td>
                <td> 
                    <a href=" {{ route('ubah.kelas',$list->id_kelas) }} " class="btn btn-primary">Ubah</a> 
                    <a href=" {{ route('hapus.kelas',$list->id_kelas) }} " class="btn btn-danger">Hapus</a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection