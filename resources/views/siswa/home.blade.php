@extends('templates.index')

@section('content')
<div class="row">
<div class="col-md-12">
    <h4>
        <a onclick="eximForm()" class="btn btn-success">Import Data</a>
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#lihat"> Tambah Siswa </button>
        </h4>
    </div>
    @include('siswa/form')
</div>    
<div class="row">
    <div class="col-md-12">
    <table class="table table-striped" id="siswa">
        <thead>
            <tr>
                <th>No</th>
                <th>Nisn</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp

            @foreach ($siswa as $list)
                <tr>
                    <td> {{ $no++ }} </td>
                    <td> {{ $list->nisn }} </td>
                    <td> {{ $list->nama }} </td>
                    <td> {{ $list->kelas }} </td>
                    <td> {{ $list->jurusan }} </td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href=" {{ route('siswa.delete', $list->id_siswa) }}"class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection