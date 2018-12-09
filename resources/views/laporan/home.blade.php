@extends('templates.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action=" {{ route('lihat.rekap') }} " method="get">
                {{-- {{ csrf_field() }} --}}
                <label for="">Mulai</label>
                <input type="date" name="mulai" class="">
                <label for="">Sampai</label>
                <input type="date" name="sampai" class="">
                <input type="submit">
            </form>
        </div>
    </div>
@endsection