@extends('templates.index')

@section('content')
    <form class="form-horizontal" action=" {{ route('siswa.create') }} " method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-md-2">Nisn</label>
            <div class="col-md-10">
                <input type="text" name="nisn" class="form-control">
                @if ($errors->has('nisn'))
                    <strong> {{ $errors->first('nisn') }} </strong>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Nama</label>
            <div class="col-md-10">
                <input type="text" name="nama" class="form-control">
                @if ($errors->has('nama'))
                    <strong> {{ $errors->first('nama') }} </strong>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Kelas</label>
            <div class="col-md-10">
                <select name="kelas" class="form-control">
                    @foreach ($kelas as $list)
                        <option value=" {{ $list->id_kelas }} "> {{ $list->kelas . ' ' .$list->jurusan }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
@endsection