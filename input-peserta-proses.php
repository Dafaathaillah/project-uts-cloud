<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-peserta
$id=$_POST["id"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$jeniskelamin=$_POST["jeniskelamin"];
$agama=$_POST["agama"];
$sekolahasal=$_POST["sekolahasal"];

//Query input menginput data kedalam tabel peserta
 

//Mengeksekusi/menjalankan query diatas	
echo  $sql="insert into tbpeserta (id,nama,alamat,jeniskelamin,agama,sekolahasal) values
('$id','$nama','$alamat','$jeniskelamin','$agama','$sekolahasal')";
die();
  $hasil=mysqli_query($db,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    header("location:data-peserta.php");
	exit;
  }
else {
	echo " - Gagal insert data";
	exit;
}  
?>