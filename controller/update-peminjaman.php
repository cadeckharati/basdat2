<?php
include "model/koneksi.php";

$id_peminjaman = $_GET["id_peminjaman"];
$id_member = $_POST["id_member"];
$id_buku = $_POST["id_buku"];
$tanggal_pinjam = $_POST["tanggal_pinjam"];
$tanggal_kembali = $_POST["tanggal_kembali"];

$sql = $pdo->prepare("UPDATE tb_peminjaman SET id_member=:id_member, id_buku=:id_buku, tanggal_pinjam=:tanggal_pinjam, tanggal_kembali=:tanggal_kembali WHERE id_peminjaman=:id_peminjaman");

$sql->bindParam(':id_member', $id_member);

$sql->bindParam(':id_buku', $id_buku);

$sql->bindParam(':tanggal_pinjam', $tanggal_pinjam);

$sql->bindParam(':tanggal_kembali', $tanggal_kembali);

$sql->bindParam(':id_peminjaman', $id_peminjaman);

$execute = $sql->execute();

if($execute){
    echo "Data berhasil diupdate!";
}else{
    echo "Data Gagal diupdate. <a href='index.php'>Kembali</a>";
}

?>