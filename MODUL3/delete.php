<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
require 'connect.php';

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $id = $_GET['id'];
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $delete="DELETE FROM showroom_mobil WHERE id = $id"
    mysqli_query($conn, $delete);

    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if (mysqli_affected_rows ($conn)> 0) {
        echo "
        <script>
        alert ('Data berhasil dihapus')
        document.location.href='list_mobil.php'</script>
        ";
    } else {
        echo "
        <script>
        alert ('Data berhasil dihapus')
        document.location.href='list_mobil.php'</script>
        ";    
    }
// Tutup koneksi ke database setelah selesai menggunakan database
$conn->close();
?>