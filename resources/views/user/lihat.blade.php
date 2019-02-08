@extends('templates.head')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <label>Nisn :</label>
            <label> {{ $siswa->nisn }} </label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label>Nama Siswa :</label>
            <label> {{ $siswa->nama }} </label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <label>Kelas :</label>
            <label> {{ $siswa->kelas }} </label>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped" id="siswa">
                <thead>
                    <tr>
                        
                        <td>No </td>
                        <td>Bulan</td>
                        <td>Status</td>
                        <td>Tahun Ajaran</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($kartu as $item)
                    @php
                    $status = "Belum Dibayar"
                    @endphp
                    
                    <tr>
                        <td> {{ $no++ }} </td>
                        <td> {{ $item->bulan }} </td>
                        <td> {{ $item->status }} </td>
                        <td> {{ $item->tahun }} </td>
                        {{-- <td><a href="pembayaran/{{ $item->id_kartu }}/lunas" onclick="event.preventDefault();document.getElementById('lunas').submit(); "
                                class="btn btn-primary">Bayar</a></td> --}}
                        @if ($item->status == $status)
                            <td>--</td>
                        @else
                    <td> <a href="{{ route('siswa.cetak',$item->id_kartu) }}" class="btn btn-info" target="_blank">Cetak Bukti</a> </td>
                    </tr>
                    
                    
                    @endif
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>

@endsection