<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$server = "localhost:4306";
$username = "root";
$password = "";
$databasename = "modul3_wad";

// Create connection
$conn = mysqli_connect($server, $username, $password, $databasename);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$conn) {
    die("Connection Gagal: Silahkan coba lagi" . mysqli_connect_error());
}
// 
?>

