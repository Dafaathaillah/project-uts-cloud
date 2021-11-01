<?php include "header.php"; ?>
		<?php 
			include "koneksi.php";
			$id = $_GET['id'];
			$data = mysqli_query($db, "SELECT * FROM tbpeserta WHERE id='$id'")or die(mysqli_error());
			$nomor = 1;
			while($d = mysqli_fetch_array($data)){
		?>
<div class="container-fluid" id="label-page">
    <h3>Edit Data Peserta</h3>
</div>
<div class="container-fluid" id="content">
    <form action="edit-proses.php" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="text" name="id" class="form-control" id="id" value="<?php echo $d['id']?>" readonly>
            </div>
        </div>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $d['nama']?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $d['alamat']?>">
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios1" value="Laki-Laki" <?php if($d['jeniskelamin']=='Laki-Laki') echo 'checked'?>>
                    <label class="form-check-label" for="gridRadios1">
                        Laki-Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jeniskelamin" id="gridRadios2" value="Perempuan" <?php if($d['jeniskelamin']=='Perempuan') echo 'checked'?>>
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
                    <option value="Islam"<?php if($d['agama'] == 'Islam') { ?> selected="selected"<?php } ?>>Islam</option>
                    <option value="Protestan"<?php if($d['agama'] == 'Protestan') { ?> selected="selected"<?php } ?>>Protestan</option>
                    <option value="Katolik"<?php if($d['agama'] == 'Katolik') { ?> selected="selected"<?php } ?>>Katolik</option>
                    <option value="Hindu"<?php if($d['agama'] == 'Hindu') { ?> selected="selected"<?php } ?>>Hindu</option>
                    <option value="Budha"<?php if($d['agama'] == 'Budha') { ?> selected="selected"<?php } ?>>Budha</option>
                    <option value="Konghucu"<?php if($d['agama'] == 'Konghucu') { ?> selected="selected"<?php } ?>>Konghucu</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="sekolahasal" class="col-sm-2 col-form-label">Sekolah Asal</label>
            <div class="col-sm-10">
                <input type="text" name="sekolahasal" class="form-control" id="sekolahasal" value="<?php echo $d['sekolahasal']?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-warning" href="data-peserta.php">Cancel</a>
    </form>
    <?php } ?>
</div>