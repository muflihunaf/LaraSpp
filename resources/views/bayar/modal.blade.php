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
                <form action=" {{ route('bayar.lunas',$item->id_kartu) }} " id="lunas" method="post">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                {{ csrf_field() }}
                        <input type="hidden" name="status" value="Lunas">
                        <input type="submit" class="btn btn-primary" value="Bayar">
                </form>
            </div>
        </div>
    </div>
</div>