<?php
include "model/koneksi.php";

$id_denda = $_GET["id_denda"];
$id_peminjaman = $_POST["id_peminjaman"];
$total_denda = $_POST["total_denda"];
$tanggal_bayar = $_POST["tanggal_bayar"];

$sql = $pdo->prepare("UPDATE tb_denda SET id_peminjaman=:id_peminjaman, total_denda=:total_denda, tanggal_bayar=:tanggal_bayar WHERE id_denda=:id_denda");

$sql->bindParam(':id_peminjaman', $id_peminjaman);

$sql->bindParam(':total_denda', $total_denda);

$sql->bindParam(':tanggal_bayar', $tanggal_bayar);

$sql->bindParam(':id_denda', $id_denda);

$execute = $sql->execute();

if($execute){
    echo "Data berhasil diupdate!";
}else{
    echo "Data Gagal diupdate. <a href='index.php'>Kembali</a>";
}
?>