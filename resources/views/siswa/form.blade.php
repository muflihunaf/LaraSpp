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

<div class="modal fade" id="hapus" tabindex="1" role="dialog" aria-label="hapus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong> Anda Yakin Ingin Menghapus Data ini? </strong></p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                @isset($list)
                    
                <a href=" {{ route('siswa.delete',$list->id_siswa) }} " class="btn btn-danger">Hapus</a>
                @endisset
            </div>
        </div>
    </div>
</div>