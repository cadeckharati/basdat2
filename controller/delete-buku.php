<?php
include "model/koneksi.php";

$id_buku = $_GET['id_buku'];

$sql = $pdo->prepare("DELETE FROM tb_buku WHERE id_buku=:id_buku");
$sql->bindParam(':id_buku', $id_buku);
$execute = $sql->execute();
if($execute){
    echo "Data berhasil dihapus!";
    echo "<br><br><a href='index.php?page=readbuku'>Kembali</a>";
}else{
    echo "Data Gagal di Hapus. <a href='index.php?page=readbuku'>Kembali</a>";
}
?>