<?php
include 'koneksi.php';

if (isset($_GET['No'])) { 
    $no = $_GET['No'];  

    $query = "SELECT * FROM tbl_mahasiswa WHERE No = $no";
    $result = $conn->query($query);
    $data = $result->fetch_assoc();
}
?>
<style>
    /* Tampilan dasar halaman */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f9f9f9;
        color: #333;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    h3 {
        color: #4CAF50;
        margin-top: 20px;
        font-size: 24px;
        text-transform: uppercase;
    }

    /* Styling form tambah data */
    form {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;
        width: 300px;
        margin: 20px auto;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    form label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
        text-align: left;
    }

    form input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 14px;
    }

    form button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        font-size: 14px;
    }

    form button:hover {
        background-color: #45a049;
    }

    /* Styling tabel */
    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px 20px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
        text-transform: uppercase;
        font-size: 14px;
    }

    td {
        font-size: 14px;
        color: #555;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    /* Styling link dan tombol */
    a {
        text-decoration: none;
        color: #4CAF50;
        font-weight: bold;
    }

    a:hover {
        color: #45a049;
    }

    button {
        background-color: #f44336;
        color: white;
        border: none;
        padding: 8px 12px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
    }

    button:hover {
        background-color: #e53935;
    }
</style>
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
