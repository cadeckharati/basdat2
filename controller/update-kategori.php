<?php
include "model/koneksi.php";

$id_kategori =  $_GET["id_kategori"];
$nama_kategori = $_POST["nama_kategori"];

$sql = $pdo->prepare("UPDATE tb_kategori SET nama_kategori=:nama_kategori WHERE id_kategori=:id_kategori");

$sql->bindParam(':nama_kategori', $nama_kategori);

$sql->bindParam(':id_kategori', $id_kategori);

$execute = $sql->execute();

if($execute){
    echo "Data berhasil diubah!";
}else{
    echo "Data Gagal diubah. <a href='index.php'>Kembali</a>";
}

?>