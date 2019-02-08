@extends('templates.index')

@section('content')
<div class="row">

    <button type="button" class="btn btn-primary" data-target="#rekap" data-toggle="modal">Rekap Per-tanggal</button>
    <button type="button" class="btn btn-success" data-target="#rekapk" data-toggle="modal">Rekap Per-kelas</button>

    <table id="siswa" class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>Nama Pengirim</th>
                <th>Nominal</th>
                <th>Bulan</th>
                <td>Foto</td>
                <th>status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($minta as $list)
            <tr>
                <td> {{ $list->nama }} </td>
                <td> {{ $list->nama_pengirim }} </td>
                <td> {{ $list->nominal }} </td>
                <td> {{ $list->bulan }} </td>
                <td> <img src=" {{ asset('storage/' . $list->gambar) }} " width="200px" height="200px"> </td>
                <td> {{ $list->status }} </td>
                <td> <a data-target="#bayar" data-toggle="modal" class="btn btn-primary"> Konfirmasi </a> </td>
            </tr>
            @include('laporan/modal')

            @endforeach
        </tbody>
    </table>

</div>

<div class="modal fade" id="rekap" tabindex="1" role="dialog" aria-label="rekap">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action=" {{ route('lihat.rekap') }} " method="get" class="form-horizontal" target="_blank">
                <div class="modal-header">
                    <h5 class="modal-title">Rekap Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="" class="col-md-2 control-label">Mulai</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="mulai">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="import" class="col-md-2 control-label">Sampai</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="sampai">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Rekap</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="rekapk" tabindex="1" role="dialog" aria-label="rekapk">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action=" {{ route('kelas.rekap') }} " method="get" class="form-horizontal" target="_blank">
                <div class="modal-header">
                    <h5 class="modal-title">Rekap Data Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="" class="col-md-2 control-label">Kelas</label>
                        <div class="col-md-10">
                            <select name="kelas" id="" class="form-control">
                                @foreach ($kelas as $list)
                                <option value=" {{ $list->id_kelas }} "> {{ $list->kelas . ' ' . $list->jurusan }}
                                </option>

                                @endforeach
                            </select>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="import" class="col-md-2 control-label">Bulan</label>
                        <div class="col-md-10">
                            <select name="bulan" id="" class="form-control">
                                @foreach ($bulan as $item)
                                <option value=" {{ $item }} "> {{ $item }} </option>
                                @endforeach
                            </select>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="import" class="col-md-2 control-label">Tahun Ajaran</label>
                        <div class="col-md-10">
                            <select name="ajaran" id="" class="form-control">
                                @foreach ($tahun as $item)
                                <option value=" {{ $item->id_tahun }} "> {{ $item->tahun }} </option>
                                @endforeach
                            </select>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Rekap</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection