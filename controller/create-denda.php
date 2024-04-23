<?php

include "model/koneksi.php";

$id_peminjaman = $_POST['id_peminjaman'];
$total_denda = $_POST['total_denda'];
$tanggal_bayar = $_POST['tanggal_bayar'];

$sql = $pdo->prepare("INSERT INTO tb_denda(id_peminjaman, total_denda, tanggal_bayar) VALUES (:id_peminjaman, :total_denda, :tanggal_bayar)");
$sql->bindParam(':id_peminjaman', $id_peminjaman);
$sql->bindParam(':total_denda', $total_denda);
$sql->bindParam(':tanggal_bayar', $tanggal_bayar);
$execute = $sql->execute();
if($execute){
    echo "Data berhasil ditambahkan!";
    echo "<br><br><a href='index.php?page=readdenda'>Kembali</a>";
}else{
    echo "Data Gagal ditambahkan!";
    echo "<br><br><a href='index.php?page=readdenda'>Kembali</a>";
}
?>