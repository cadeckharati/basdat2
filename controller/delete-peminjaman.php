<?php
include "model/koneksi.php";

$id_peminjaman = $_GET['id_peminjaman'];

$sql = $pdo->prepare("DELETE FROM tb_peminjaman WHERE id_peminjaman=:id_peminjaman");
$sql->bindParam(':id_peminjaman', $id_peminjaman);
$execute = $sql->execute();
if($execute){
    echo "Data berhasil dihapus!";
}else{
    echo "Data Gagal di Hapus. <a href='index.php'>Kembali</a>";
}
?>