<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$agama = $_POST['agama'];
$sekolahasal = $_POST['sekolahasal'];
 
mysqli_query($db, "UPDATE tbpeserta SET  id='$id', 
                                        nama='$nama', 
                                        alamat='$alamat', 
                                        jeniskelamin='$jeniskelamin', 
                                        agama='$agama', 
                                        sekolahasal='$sekolahasal' WHERE id='$id'");
header("location:data-peserta.php");
?>