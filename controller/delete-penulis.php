<?php
include "model/koneksi.php";

$id_penulis = $_GET['id_penulis'];

$sql = $pdo->prepare("DELETE FROM tb_penulis WHERE id_penulis=:id_penulis");
$sql->bindParam(':id_penulis', $id_penulis);
$execute = $sql->execute();
if($execute){
    echo "Data berhasil dihapus!";
}else{
    echo "Data Gagal di Hapus. <a href='index.php'>Kembali</a>";
}
?>