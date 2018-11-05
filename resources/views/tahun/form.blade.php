<div class="collapse" id="lihat">
        <div class="row">
        <form action=" {{ route('tambah.tahun') }} " method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="col-md-2 form-group">
                <label for="tahun" class="control-label">Tahun</label>
                <select name="tahun" id="tahun" class="form-control">
                    <option value="2017/2018">2017/2018</option>
                    <option value="2018/2019">2018/2019</option>
                    <option value="2018/2019">2018/2019</option>
                    <option value="2019/2020">2019/2020</option>
                    <option value="2020/2021">2020/2021</option>
                    <option value="2021/2022">2021/2022</option>
                    <option value="2022/2023">2022/2023</option>
                    <option value="2023/2024">2023/2024</option>
                </select>
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