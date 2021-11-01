<?php include "header.php"; ?>
<div class="container-fluid" id="label-page">
    <h3>Input Data Peserta</h3>
</div>
<div class="container-fluid" id="content">
    <form action="input-peserta-proses.php" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="text" name="id" class="form-control" id="id">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" name="alamat" class="form-control" id="alamat">
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios1" value="Laki-Laki">
                    <label class="form-check-label" for="gridRadios1">
                        Laki-Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios2" value="Perempuan">
                    <label class="form-check-label" for="gridRadios2">
                        Perempuan
                    </label>
                </div>
            </div>
        </fieldset>
        <div class="row mb-3">
            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
                <select class="form-select form-select-sm" name="agama" aria-label=".form-select-sm example" id="agama">
                        <option selected>Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Protestan</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="sekolahasal" class="col-sm-2 col-form-label">Sekolah Asal</label>
            <div class="col-sm-10">
                <input type="text" name="sekolahasal" class="form-control" id="sekolahasal">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-warning" href="data-peserta.php">Cancel</a>
    </form>
</div>