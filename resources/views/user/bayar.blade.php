@extends('templates.head')

@section('content')

    <button type="button" class="btn btn-info" data-target="#info" data-toggle="modal">Info</button>
    <button type="button" class="btn btn-success" data-target="#cara" data-toggle="modal">Cara Membayar</button>
    @include('user/info')

    <form action=" {{ route('ortu.lunas') }} " method="post" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id_siswa" value=" {{ Auth::user()->id_siswa }} ">
        
        <label class="control-label col-md-2">Atas Nama</label>
        <div class="form-group col-md-10">
            <input type="text" name="nama" class="form-control">
        </div>
        <label class="control-label col-md-2">Bulan</label>
        <div class="form-group col-md-4">
        <select name="bulan" class="form-control">
            @foreach ($bulan as $item)
                <option value=" {{ $item->bulan }} "> {{ $item->bulan }} </option>
            @endforeach
        </select>
        </div>
        <div class="form-group col-md-1">
            <label class="control-label"> Sampai</label>
        </div>
        <div class="form-group col-md-5"> 
        <select name="bulan2" class="form-control">
            @foreach ($bulan as $item)
                <option value=" {{ $item->bulan }} "> {{ $item->bulan }} </option>
            @endforeach
        </select>

        </div>  
        <div class="form-group">
            <label class="control-label col-md-2">Foto Bukti transfer</label>
            <div class="col-md-10">
                <input type="file" name="gambar" id="" class="">
            </div>

        </div>
        <label class="control-label col-md-2">Nominal</label>
        <div class="form-group col-md-10">
        <input type="number" name="nominal" min="0" class="form-control">
        </div>
        <label class="control-label col-md-2">Tanggal Transfer </label>
        <div class="form-group col-md-10">
        <input type="date" name="tanggal" class="form-control datetime">
        </div>
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection