@extends('templates.index')

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
    <div class="row" style="">
        <div class="col-md-12">
            <form action=" {{ route('bayar.daftarulang', $siswa->id_siswa) }} " method="post">
                {{ csrf_field() }}
                <select name="id_tahun">
                    @foreach ($tahun as $ajaran)
                    <option value="{{ $ajaran->id_tahun }} "> {{ $ajaran->tahun }} </option>
                    @endforeach
                </select>
                <button type="submit">Daftar</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped" id="siswa">
                <thead>
                    <tr>
                        <td></td>
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
                        <td><input type="checkbox" name="" id=""></td>
                        <td> {{ $no++ }} </td>
                        <td> {{ $item->bulan }} </td>
                        <td> {{ $item->status }} </td>
                        <td> {{ $item->tahun }} </td>
                        {{-- <td><a href="pembayaran/{{ $item->id_kartu }}/lunas" onclick="event.preventDefault();document.getElementById('lunas').submit(); "
                                class="btn btn-primary">Bayar</a></td> --}}
                        @if ($item->status == $status)
                        <td>
                            <form action=" {{ route('bayar.lunas',$item->id_kartu) }} " id="lunas" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="status" value="Lunas">
                                <input type="submit" class="btn btn-primary" value="Bayar">
                            </form>
                        </td>
                        @else
                    <td> <a href="{{ route('bayar.cetak',$item->id_kartu) }}" class="btn btn-info">Cetak Bukti</a> </td>
                    </tr>
                    
                    
                    @endif
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>

@endsection