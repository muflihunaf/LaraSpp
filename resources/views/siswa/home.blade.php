@extends('templates.index')

@section('content')
<div class="row">
<div class="col-md-12">
    <h4>
        <a onclick="#" class="btn btn-success">Import Siswa</a>
        <a onclick="#" class="btn btn-primary">Tambah Siswa</a>
        </h4>
    </div>
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
                    <td>s</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection