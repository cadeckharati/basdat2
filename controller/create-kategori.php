<?php

include "model/koneksi.php";

$nama_kategori = $_POST['nama_kategori'];

$sql = $pdo->prepare('INSERT INTO tb_kategori(nama_kategori) VALUES(:nama_kategori)');
$sql->bindParam(':nama_kategori', $nama_kategori);
$execute = $sql->execute();
if($execute){
    echo "Data berhasil ditambahkan!";
}else{
    echo "Data Gagal ditambahkan. <a href='index.php'>Kembali</a>";
}
?>