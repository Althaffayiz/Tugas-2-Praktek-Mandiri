<?php
include 'koneksi.php'; 

$query = "SELECT * FROM tbl_mahasiswa";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Data Mahasiswa</title>
    <script>
        function confirmDelete(no) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                window.location.href = 'hapus.php?No=' + no; 
            }
        }
    </script>
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

</head>
<body>

<h3>Form Tambah Data Mahasiswa</h3>
<form action="tambah.php" method="POST">
    <label for="nim">Nim:</label>
    <input type="text" id="nim" name="nim" required><br><br>

    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="prodi">Prodi:</label>
    <input type="text" id="prodi" name="prodi" required><br><br>

    <button type="submit" name="submit">Tambah</button>
</form>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr> 
    </thead>
    <tbody>
        <?php $no = 1; while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['NIM']; ?></td>
            <td><?php echo $row['Nama']; ?></td>
            <td><?php echo $row['Prodi']; ?></td>
            <td>
                <a href="ubah.php?No=<?php echo $row['No']; ?>">Ubah</a> 
                <button onclick="confirmDelete(<?php echo $row['No']; ?>)">Hapus</button> 
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
