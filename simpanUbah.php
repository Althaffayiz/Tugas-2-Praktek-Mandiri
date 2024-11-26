<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $no = $_POST['No'];  
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $query = "UPDATE tbl_mahasiswa SET NIM = '$nim', Nama = '$nama', Prodi = '$prodi' WHERE No = $no"; 
    
    if ($conn->query($query) === TRUE) {
        header('Location: admin.php');
        exit;
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>
