@extends('templates.index')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#lihat">Tambah Tahun Ajaran</button>
        </div>
        @include('tahun/form')
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-stripped" id="siswa">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Nominal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($tahun as $list)
                        
                    <tr>
                        <td> {{ $no++ }}  </td>
                        <td> {{ $list->tahun }} </td>
                        <td> {{ $list->nominal }} </td>
                        <td>
                            <a href=" {{ route('edit.tahun',$list->id_tahun) }} " class="btn btn-info">Edit</a>
                            <a href=" {{ route('hapus.tahun',$list->id_tahun) }} " class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection