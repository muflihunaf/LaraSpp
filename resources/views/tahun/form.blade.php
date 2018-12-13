<div class="collapse" id="lihat">
        <div class="row">
        <form action=" {{ route('tambah.tahun') }} " method="post" class="form-horizontal">
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