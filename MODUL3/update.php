<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
require 'connect.php';
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];
$update = "SELECT * from alatmusik WHERE id=$id";
$result = mysqli_query($conn, $update);
$row = mysqli_fetch_assoc($result);

        $nama_mobil = $_POST['nama_mobil']
        $brand_mobil = $_POST['brand_mobil']
        $warna_mobil = $_POST['warna_mobil']
        $tipe_mobil = $_POST['tipe_mobil']
        $harga_mobil = $_POST['harga_mobil']
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
        mysqli_query($conn, "UPDATE showroom_mobil SET id='$id', nama_mobil='$nama_mobil', brand_mobil='$brand_mobil', warna_mobil='$warna_mobil', tipe_mobil='$tipe_mobil', harga_mobil='$harga_mobil' WHERE id='$id'";)
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.

        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil

        // Eksekusi perintah SQL

        // Buatkan kondisi jika eksekusi query berhasil
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya
        if( $update ) {
            header('Location: list_mobil.php');
            echo "Data Berhasil diubah";
        } else {
            die("Data Gagal diubah");
        }
    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database
$conn->close();
?>