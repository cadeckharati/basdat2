<?php

include "model/koneksi.php";

$id_buku = $_GET['id_buku'];
$judul_buku = $_POST['judul_buku'];
$id_penulis = $_POST['id_penulis'];
$stok = $_POST['stok'];
$tahun_terbit = $_POST['tahun_terbit'];

$sql = $pdo->prepare("UPDATE tb_buku SET judul_buku=:judul_buku, id_penulis=:id_penulis, stok=:stok, tahun_terbit=:tahun_terbit WHERE id_buku=:id_buku");
$sql->bindParam(':judul_buku', $judul_buku);
$sql->bindParam(':id_penulis', $id_penulis);
$sql->bindParam(':stok', $stok);
$sql->bindParam(':tahun_terbit', $tahun_terbit);
$sql->bindParam(':id_buku', $id_buku);
$execute = $sql->execute();
if($execute){
    echo "Data berhasil diupdate!";
}else{
    echo "Data Gagal diupdate. <a href='index.php'>Kembali</a>";
}
?>