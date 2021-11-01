<?php
include'koneksi.php';
$id=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbpeserta
	WHERE id='$id'"
);

header("location:data-peserta.php");
?>