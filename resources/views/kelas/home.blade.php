@extends('templates.index')

@section('content')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bayar"> Tambah Kelas </button>
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
                    <a class="btn btn-danger" data-target="#hapus" data-toggle="modal">Hapus</a> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="modal fade" id="hapus" tabindex="1" role="dialog" aria-label="hapus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong> Anda Yakin Ingin Menghapus Data ini? </strong></p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                @isset($list)
                <a href=" {{ route('hapus.kelas',$list->id_kelas) }} " class="btn btn-danger">Hapus</a>
                @endisset
            </div>
        </div>
    </div>
</div>
@endsection