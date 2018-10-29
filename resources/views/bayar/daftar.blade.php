@extends('templates.index')

@section('content')

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
<div class="row">
    <div class="col-md-12">

        <label>Nisn :</label>
        <label> {{ $siswa->nisn }} </label>
    </div>
</div>
<hr>
<div class="row" style="">
    <div class="col-md-12">
    <form action=" {{ route('bayar.daftarulang', $siswa->id_siswa) }} " method="post">
        {{ csrf_field() }}
        <button type="submit">Daftar</button>
    </form>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
            <table class="table table-striped" id="siswa">
            <thead>
                <tr>
                    <td>No </td>
                    <td>Bulan</td>
                    <td>Status</td>
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
            @if ($item->status == $status)
                
            
            <tr>
                <td> {{ $no++ }} </td>
                <td> {{ $item->bulan }}  </td>
                <td> {{ $item->status }} </td>
                {{-- <td><a href="pembayaran/{{ $item->id_kartu }}/lunas" onclick="event.preventDefault();document.getElementById('lunas').submit(); " class="btn btn-primary">Bayar</a></td> --}}
                <td><form action="/pembayaran/{{ $item->id_kartu }}/lunas" id="lunas" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="status" value="Lunas">
                    <input type="submit">
                </form>
            </td>
            </tr>
            @endif
            @endforeach
        </tbody>
        </table>
    </div>
</div>

@endsection