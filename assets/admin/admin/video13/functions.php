<!-- kengunaan function untuk menghapus dan menambah data di data base -->
<?php
//koneksi kedatabase
$koneksi = mysqli_connect("localhost", "root", "", "ppdb");

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows =[];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $koneksi;
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $asal_sekolah = htmlspecialchars($data["asal_sekolah"]);
    $nomor_hp = htmlspecialchars($data["nomor_hp"]);
    $email = htmlspecialchars($data["email"]);
    $tgl_daftar = htmlspecialchars($data["tgl_daftar"]);
    $poto = htmlspecialchars($data["poto"]);

     $query = "INSERT INTO `casis`(`nis`, `nama`, `alamat`, `jenis_kelamin`, `asal_sekolah`, `nomor_hp`, `email`, `poto`, `tgl_daftar`)
     VALUES
     ('$nis','$nama','$alamat','$jenis_kelamin', '$asal_sekolah','$nomor_hp','$email','$poto','$tgl_daftar')";

   
mysqli_query($koneksi, $query);

return mysqli_affected_rows($koneksi);
}


function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM casis WHERE nis=$id");
    
    return mysqli_affected_rows($koneksi);

}


function  ubah($data){
    global $koneksi;
    $id = $data["nis"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $asal_sekolah = htmlspecialchars($data["asal_sekolah"]);
    $nomor_hp = htmlspecialchars($data["nomor_hp"]);
    $email = htmlspecialchars($data["email"]);
    $tgl_daftar = htmlspecialchars($data["tgl_daftar"]);
    $poto = htmlspecialchars($data["poto"]);


    $query = "UPDATE `casis` SET 
            nama = '$nama',
            alamat =' $alamat',
            jenis_kelamin = '$jenis_kelamin',
            asal_sekolah = '$asal_sekolah',
            nomor_hp = '$nomor_hp',
            email = '$email',
            tgl_daftar = '$tgl_daftar',
            poto = '$poto'
            WHERE nis= $id
    ";
mysqli_query($koneksi, $query);

return mysqli_affected_rows($koneksi);
}



?>
