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
        /* CSS untuk memperkecil ukuran tabel */
        table {
            width: 60%;  /* Mengatur lebar tabel menjadi lebih sempit */
            table-layout: fixed;  /* Mengatur agar lebar kolom tetap */
            border-collapse: collapse;
            margin: 20px auto; /* Memberikan margin pada tabel */
        }

        th, td {
            border: 1px solid black;
            padding: 5px 10px;  /* Mengurangi padding di dalam tabel */
            text-align: left;
            word-wrap: break-word;  /* Membungkus teks yang panjang */
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            max-width: 150px;  /* Lebar maksimum kolom */
        }

        th, td {
            width: auto; /* Menyesuaikan lebar kolom berdasarkan konten */
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
