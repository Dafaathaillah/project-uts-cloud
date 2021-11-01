<?php

$server = "10.0.0.124";
$user = "admin";
$password = "Dafa*1234";
$nama_database = "uts_cloud";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
// else{
//     echo "Berhasil terkoneksi";
// }

?>