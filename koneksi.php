<?php

$server = "localhost";
$user = "root";
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