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
                <a href="  {{ route('hapus.tahun',$list->id_tahun) }} " class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>