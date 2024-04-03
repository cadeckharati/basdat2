<?php
include "model/koneksi.php";

$id_kategori = $_GET['id_kategori'];

$sql = $pdo->prepare("DELETE FROM tb_kategori WHERE id_kategori=:id_kategori");
$sql->bindParam(':id_kategori', $id_kategori);
$execute = $sql->execute();
if($execute){
    echo "Data berhasil dihapus!";
}else{
    echo "Data Gagal di Hapus. <a href='index.php'>Kembali</a>";
}
?>