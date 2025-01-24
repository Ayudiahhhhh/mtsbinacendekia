<!--msqli i : imporove 
pdo(php data object)terhubung kebanyak data base
require dan include sama  kenggunaannya buat pemanggilan data -->
<?php
require 'functions.php';
$koneksi = query ("SELECT * FROM casis");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1> Daftar casis</h1>

    <a href="tambah.php">Tambah data casis</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis_kelamin</th>
            <th>Asal_sekolah</th>
            <th>Nomor_hp</th>
            <th>Email</th>
            <th>Tgl_daftar</th>
            <th>Poto</th>
id

</tr>
<?php $a=1; ?>
<?php foreach ($casis as $row) : ?>
<tr>
            <td><?=$a; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row[""]; ?> ">ubah |</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>"onclick="
                return confirm('yakin?');">hapus</a>
            </td>
            <td><img src="img/<?=$row["poto"]; ?>"width="50"></td>
            <td><?= $row["nis"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["jenis_kelamin"]; ?></td>
            <td><?= $row["asal_sekolah"]; ?></td>
            <td><?= $row["nomor_hp"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["tgl_daftar"]; ?></td>
</tr>
<?php $a++;?>
<?php endforeach;?>

</table>
    
</body>
</html>