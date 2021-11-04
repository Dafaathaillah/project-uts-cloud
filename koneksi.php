<?php

$server = "10.0.0.195";
$user = "admin";
$password = "Tyas*2828";
$nama_database = "uts_cloud";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
// else{
//     echo "Berhasil terkoneksi";
// }

?>