@extends('templates.index')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-6">
        <h1>Edit Data</h1>
    </div>
</div>

<form action=" {{ route('update.tahun',$tahun->id_tahun) }} " method="post" class="form-horizontal">
    {{ csrf_field() }}
        <div class="row">
            <div class="form-group col-md-2">
                <label for="" class="control-label col-md-6">Tahun</label>
            </div>
            <div class="form-group col-md-10">
                <input type="text" name="tahun" class="form-control" value="{{ $tahun->tahun }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-2">
                <label for="" class="control-label col-md-6">Nominal</label>
            </div>
            <div class="form-group col-md-10">
                <input type="text" name="nominal" class="form-control" value="{{ $tahun->nominal }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-11 col-md-1">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
                
        </form>
@endsection