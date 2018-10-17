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
        <form action=" {{ route('bayar.lunas', $siswa->id_siswa) }} " method="post" class="">
            @foreach ($kartu as $item)
            <div class="form-group col-md-3">
                <h2> {{ $item->bulan }} </h2>
                <div class="col-md-2 form-group">
                <input type="checkbox" name="bulan" class="" value="20000">Bayar
            </div>
            </div>
            @endforeach
            <button type="submit" class="pull-right">Bayar</button>
        </form>
    </div>
</div>

@endsection