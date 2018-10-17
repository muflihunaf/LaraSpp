@extends('templates.index')

@section('content')

<div class="row">
    <div class="col-md-12" >
        
        <label>Nama Siswa :</label>
        <label> {{ $siswa->nama }} </label>
    </div>
</div>
<div class="row">
        <div class="col-md-12" >
            
            <label>Kelas :</label>
            <label> {{ $siswa->kelas }} </label>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12" >
                
                <label>Nisn :</label>
                <label> {{ $siswa->nisn }} </label>
            </div>
        </div>
@endsection