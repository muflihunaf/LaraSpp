    <div class="modal fade" id="bayar" tabindex="1" role="dialog" aria-label="bayar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action=" {{ route('tambah.kelas') }} " method="post" class="form-horizontal">
                {{ csrf_field() }}
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                        <label for="import" class="col-md-2 control-label">Kelas</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="kelas">
                            <span class="help-block with-errors"></span>
                        </div>
                </div>
                <div class="form-group">
                        <label for="import" class="col-md-2 control-label">Jurusan</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="jurusan">
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

