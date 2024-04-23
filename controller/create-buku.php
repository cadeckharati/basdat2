<?php

include "model/koneksi.php";

$judul_buku = $_POST['judul_buku'];
$id_penulis = $_POST['id_penulis'];
$stok = $_POST['stok'];
$tahun_terbit = $_POST['tahun_terbit'];

$sql = $pdo->prepare("INSERT INTO tb_buku(judul_buku, id_penulis, stok, tahun_terbit) VALUES(:judul_buku, :id_penulis, :stok, :tahun_terbit)");
$sql->bindParam(':judul_buku', $judul_buku);
$sql->bindParam(':id_penulis', $id_penulis);
$sql->bindParam(':stok', $stok);
$sql->bindParam(':tahun_terbit', $tahun_terbit);
$execute = $sql->execute();
if($execute){
    echo "Data berhasil ditambahkan!";
    echo "<br><br><a href='index.php?page=readbuku'>Kembali</a>";
}else{
    echo "Data Gagal ditambahkan!";
    echo "<br><br><a href='index.php?page=readbuku'>Kembali</a>";
}
?>