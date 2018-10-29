@extends('templates.index')

@section('content')
<h4>Edit Kelas</h4>
    <div class="row">
        <div class="col-md-12">
        <form action=" {{ route('update.kelas',$kelas->id_kelas) }} " method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="kelas" class="control-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" value="{{ $kelas->kelas }}">
            </div>
            <div class="form-group">
                    <label for="Jurusan" class="control-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="{{ $kelas->jurusan }}">
            </div>
            <div class="form-group">
                    <button type="submit" class="pull-right btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    </div>    
@endsection