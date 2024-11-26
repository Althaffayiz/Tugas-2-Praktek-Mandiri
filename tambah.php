<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $query = "INSERT INTO tbl_mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";
    $conn->query($query);
    
    header('Location: admin.php');
    exit;
}
?>
