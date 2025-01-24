<?php
require 'functions.php';

//tampil data di URL
$id = $_GET["nis"];
//query data casis berdasrkan id
$row= query("SELECT * FROM casis WHERE nis=$id")[0];


//cek apakah tombol submit sudah ditekan atau belum
if( isset( $_POST["submit"]) ) {

    //cek apakah data berhasil diubah atau tidak
    if(ubah($_POST) > 0) {
    echo"
    <script>
    alert( 'data berhasil di ubah!');
    document.location.href ='admin/data pendaftaran.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert( 'data gagal di ubah!');
    document.location.href ='admin/data pendaftaran.php';
    </script>
     ";
}


}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ubah data casis</title>
</head>
<body>
    <h1>ubah data casis</h1>

    <form action="" method="post">
    <ul>
        <li>
        <label for="nis"> Nis: </label>
        <input type="text" name="nis" value="<?= $row['nis'] ?>" id="nis"required>
        </li>

        <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" value="<?= $row['nama'] ?>" id="nama">
        </li>

        <li>
        <label for="alamat">Alamat : </label>
        <input type="text" name="alamat" value="<?= $row['alamat'] ?>" id="alamat">
        </li>

        <li>
        <label for="jenis_kelamin">Jenis_kelamin : </label>
        <input type="text" name="jenis_kelamin" value="<?= $row['jenis_kelamin'] ?>" id="jenis_kelamin">
        </li>

        <li>
        <label for="asal_sekolah">Asal_sekolah : </label>
        <input type="text" name="asal_sekolah" value="<?= $row['asal_sekolah'] ?>"id="asal_sekolah">
        </li>

        <li>
        <label for="nomor_hp">Nomor_hp : </label>
        <input type="number" name="nomor_hp" value="<?= $row['asal_sekolah'] ?>" id="nomor_hp">
        </li>

        <li>
        <label for="email">Email : </label>
        <input type="email" name="email" value="<?= $row['email'] ?>" id="email">
        </li>

        <li>
        <label for="tgl_daftar">Tgl_daftar : </label>
        <input type="date" name="tgl_daftar" value="<?= $row['tgl_daftar'] ?> " id="tgl_daftar">
        </li>

        <li>
        <label for="poto">Poto : </label>
        <input type="text" name="poto" value="<?= $row['poto'] ?> " id="poto">
        </li>

        <li>
        <button type="submit" name="submit">ubah data!</button>
        </li>
    </ul>
</form>
</body>
</html>