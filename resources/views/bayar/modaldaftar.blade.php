<div class="modal fade" id="daftar" tabindex="1" role="dialog" aria-label="daftar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4><strong> Apakah data sudah benar? </strong></h4>
            </div>
            <div class="modal-body">

                <form action=" {{ route('bayar.daftarulang', $siswa->id_siswa) }} " method="post">
                {{ csrf_field() }}
                <div class="col-md-3">
                    <label >Tahun Ajaran</label>
                </div>
                <div class="col-md-4">
                <select name="id_tahun" class="form-control">
                    @foreach ($tahun as $ajaran)
                    <option value="{{ $ajaran->id_tahun }} "> {{ $ajaran->tahun }} </option>
                    @endforeach
                </select>
                </div>
    
            </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</div>