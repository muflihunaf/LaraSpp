<div class="collapse" id="lihat">
        <div class="row">
        <form action="" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="col-md-2 form-group">
                <label for="tahun">Tahun</label>
                <input type="text" name="tahun" class="form-control">
            </div>
            <div class="col-md-2 form-group">
                <label for="nominal">Nominal</label>
                <input type="number" class="form-control" min="0" max="1000000" name="nominal">
            </div>
            <div class="col-md-2 form-group" >
                <input type="submit" name="submit" class="btn btn-primary form-control" value="Simpan" style="margin-top:23px">
            </div>
        </form>
    </div>
    </div>
    
    <div class="modal fade" id="tambah" tabindex="1" role="dialog" aria-label="tambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="  {{ route('tambah.tahun') }} " method="post" class="form-horizontal">
                {{ csrf_field() }}
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                        <label for="import" class="col-md-2 control-label">Tahun</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tahun">
                            <span class="help-block with-errors"></span>
                        </div>
                </div>
                <div class="form-group">
                        <label for="import" class="col-md-2 control-label">Nominal</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nominal">
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