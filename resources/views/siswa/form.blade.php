<div class="collapse" id="lihat">
    <div class="row">
    <form action=" {{ route('siswa.create') }} " method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="col-md-2 form-group">
            <label for="nama" class="control-label">Nisn</label>
            <input type="text" name="nisn" class="form-control">
        </div>
        <div class="col-md-2 form-group">
                <label for="nama" class="control-label">Nama</label>
                <input type="text" name="nama" class="form-control">
        </div>
        <div class="col-md-2 form-group">
            <label>Kelas</label>
            <select name="kelas" class="form-control">
                @foreach ($kelas as $item)
                    <option value=" {{ $item->id_kelas }} "> {{ $item->kelas .' ' .$item->jurusan }} </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2 form-group" >
            <input type="submit" name="submit" class="btn btn-primary form-control" value="Simpan" style="margin-top:23px">
        </div>
    </form>
</div>
</div>

<div class="modal" id="modal-exim" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <form action=" {{ route('import.siswa') }} " method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true"> &times;</span>
                    </button>
                    <h2 class="modal-title">Export / Import Data</h2>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="import" class="col-md-2">Import</label>
                        <div class="col-md-6">
                            <input type="file" name="file" id="file" class="form-control">
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="import" class="col-md-2">Contoh</label>
                        <div class="col-md-6">
                            <a href=" {{ route('export.siswa') }} " class="btn btn-success">Download</a>
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>