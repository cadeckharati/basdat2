<?php
include "model/koneksi.php";

$id_member = $_GET['id_member'];

$sql = $pdo->prepare("DELETE FROM tb_member WHERE id_member=:id_member");
$sql->bindParam(':id_member', $id_member);
$execute = $sql->execute();
if($execute){
    echo "Data berhasil dihapus!";
}else{
    echo "Data Gagal di Hapus. <a href='index.php'>Kembali</a>";
}
?>