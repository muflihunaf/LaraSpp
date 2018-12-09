@extends('templates.index')

@section('content')
    <div class="row">
        
        <div class="col-md-12">
            <form action=" {{ route('lihat.rekap') }} " method="get" target="_blank">
                <label class="control-label">Mulai</label>
                <input type="date" name="mulai" class="">
                <label for="">Sampai</label>
                <input type="date" name="sampai" class="">
                <input type="submit" value="Rekap">
            </form>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-md-12">
            <form action=" {{ route('kelas.rekap') }} " method="get">
                <label for="kelas">Kelas</label>
                <select name="kelas" id="">
                    @foreach ($kelas as $list)
                        <option value=" {{ $list->id_kelas }} "> {{ $list->kelas . ' ' . $list->jurusan }} </option>
                    @endforeach
                </select>
                <select name="bulan" >
                    @foreach ($bulan as $item)
                        <option value="{{ $item }}"> {{ $item }} </option>
                    @endforeach
                </select>
                <input type="submit" value="Rekap">
            </form>
        </div>
    </div> --}}
@endsection