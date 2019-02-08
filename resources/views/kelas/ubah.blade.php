@extends('templates.index')

@section('content')
<h4>Edit Kelas</h4>
    <div class="row">
        <div class="col-md-12">
        <form action=" {{ route('update.kelas',$kelas->id_kelas) }} " method="post" class="form-horizontal">
            {{ csrf_field() }}
            <label for="kelas" class="control-label col-md-2">Kelas</label>
            <div class="form-group col-md-10">
                <input type="text" name="kelas" class="form-control" value="{{ $kelas->kelas }}">
            </div>
            <label for="Jurusan" class="control-label col-md-2">Jurusan</label>
            <div class="form-group col-md-10">
                    <input type="text" name="jurusan" class="form-control" value="{{ $kelas->jurusan }}">
            </div>
            <div class="form-group">
                    <button type="submit" class="pull-right btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    </div>    
@endsection