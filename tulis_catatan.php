<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Tulis catatan</h3>
    </div>

    <form action="config/simpan_catatan.php" method="post">
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pilih tanggal</label>
                <div class="col-sm-10">
                    <input type="date" name="tanggal" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pilih jam</label>
                <div class="col-sm-10">
                    <input type="time" name="jam" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <input type="text" name="lokasi" class="form-control" placeholder="Masukkan lokasi">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Suhu tubuh</label>
                <div class="col-sm-10">
                    <input type="number" name="suhu" class="form-control" placeholder="Masukkan suhu tubuh (Celcius)">
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-success float-right m-2"><i class="fa fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-warning float-right m-2"><i class="fa fa-trash"></i> Kosongkan</button>
        </div>
    </form>
</div>