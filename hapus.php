<?php
include 'koneksi.php';

if (isset($_GET['No'])) { 
    $no = $_GET['No'];  

    $query = "DELETE FROM tbl_mahasiswa WHERE No = $no"; 
    $conn->query($query);

    header('Location: admin.php');
    exit;
}
?>
