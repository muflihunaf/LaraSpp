<div class="modal fade" id="bayar" tabindex="1" role="dialog" aria-label="bayar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><strong> Apakah data sudah benar? </strong></p>

            </div>
            <div class="modal-footer">
                <form action=" {{ route('confirm.bayar',$list->id_pembayaran) }} " id="lunas" method="post">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="Bayar">
                </form>
            </div>
        </div>
    </div>
</div>