@extends('templates.head')

@section('content')
    <form action=" {{ route('ortu.lunas') }} " method="post">
        {{ csrf_field() }}
        <label for="">Nama Pengirim</label>
        <input type="hidden" name="id_siswa" value=" {{ Auth::user()->id_siswa }} ">
        <input type="text" name="nama" id="">
        <label for="">Bulan</label>
        <select name="bulan" >
            @foreach ($bulan as $item)
                <option value=" {{ $item->bulan }} "> {{ $item->bulan }} </option>
            @endforeach
        </select> - 
        <select name="bulan2" >
            @foreach ($bulan as $item)
                <option value=" {{ $item->bulan }} "> {{ $item->bulan }} </option>
            @endforeach
        </select>
        <label>Nominal</label>
        <input type="number" name="nominal" min="0">
        <label for="">Tanggal Transfer </label>
        <input type="date" name="tanggal">
        <button type="submit">Kirim</button>
    </form>
@endsection