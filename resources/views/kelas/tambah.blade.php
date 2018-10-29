<div class="collapse" id="lihat">
        <div class="row">
        <form action=" {{ route('tambah.kelas') }} " method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="col-md-2 form-group">
                <label for="kelas" class="control-label">Kelas</label>
                <input type="text" name="kelas" class="form-control">
            </div>
            <div class="col-md-2 form-group">
                    <label for="jurusan" class="control-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control">
            </div>
            <div class="col-md-2 form-group" >
                <input type="submit" name="submit" class="btn btn-primary form-control" value="Simpan" style="margin-top:23px">
            </div>
        </form>
    </div>
    </div>