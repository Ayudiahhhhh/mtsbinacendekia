<?php
require 'functions.php';

$id = $_GET["nis"];

if(hapus($id) > 0){
        echo"
        <script>
        alert( 'data berhasil di hapus!');
        document.location.href ='admin/data pendaftaran.php';
        </script>
        ";
    }else{
        echo"
        <script>
        alert( 'data gagal di tambahkan!');
        document.location.href ='admin/data pendaftaran.php';
        </script>
         ";
    }
?>