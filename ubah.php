<?php
include 'koneksi.php';

if (isset($_GET['No'])) { 
    $no = $_GET['No'];  

    $query = "SELECT * FROM tbl_mahasiswa WHERE No = $no";
    $result = $conn->query($query);
    $data = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>

<h2>Form Ubah Data Mahasiswa</h2>

<form action="simpanUbah.php" method="POST">
    <input type="hidden" name="No" value="<?php echo $data['No']; ?>" /> 
    
    <label for="nim">Nim:</label>
    <input type="text" id="nim" name="nim" value="<?php echo $data['NIM']; ?>" required><br><br>

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" value="<?php echo $data['Nama']; ?>" required><br><br>

    <label for="prodi">Prodi:</label>
    <input type="text" id="prodi" name="prodi" value="<?php echo $data['Prodi']; ?>" required><br><br>

    <button type="submit" name="submit">Ubah</button>
</form>

</body>
</html>
