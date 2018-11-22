@extends('templates.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="" method="get">
                <label for="">Tahun Ajaran</label>
                <select name="tahun">
                    @foreach ($tahun as $list)
                        <option value="{{ $list->id_tahun }} "> {{ $list->tahun }} </option>
                    @endforeach
                </select>
                <label>Kelas</label>
                <select name="kelas">
                    @foreach ($kelas as $list)
                        <option value=" {{ $list->id_kelas }} "> {{ $list->kelas }} </option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-info">Lihat</button>

            </form>
        </div>
    </div>
@endsection