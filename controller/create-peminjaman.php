<?php

include "model/koneksi.php";

$id_member = $_POST['id_member'];
$id_buku = $_POST['id_buku'];
$tanggal_pinjam = $_POST['tanggal_pinjam'];
$tanggal_kembali = $_POST['tanggal_kembali'];

$sql = $pdo->prepare("INSERT INTO tb_peminjaman(id_member, id_buku, tanggal_pinjam, tanggal_kembali) VALUES (:id_member, :id_buku, :tanggal_pinjam, :tanggal_kembali)");
$sql->bindParam(':id_member', $id_member);
$sql->bindParam(':id_buku', $id_buku);
$sql->bindParam(':tanggal_pinjam', $tanggal_pinjam);
$sql->bindParam(':tanggal_kembali', $tanggal_kembali);
$sql->execute();

?>