@extends('templates.index')

@section('content')
    <form class="form-horizontal" action=" {{ route('siswa.update',$siswa->id_siswa) }} " method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-md-2">Nisn</label>
            <div class="col-md-10">
                <input type="text" name="nisn" class="form-control" value=" {{ $siswa->nisn }} " >
                @if ($errors->has('nisn'))
                    <strong> {{ $errors->first('nisn') }} </strong>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Nama</label>
            <div class="col-md-10">
                <input type="text" name="nama" class="form-control" value=" {{ $siswa->nama }} ">
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
                <option value=" {{ $list->id_kelas }}" @if ( $siswa->id_kelas == $list->id_kelas ) selected="selected" @endif> {{ $list->kelas . ' ' .$list->jurusan }}</option>
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