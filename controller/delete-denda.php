<?php
include "model/koneksi.php";

$id_denda = $_GET['id_denda'];

$sql = $pdo->prepare("DELETE FROM tb_denda WHERE id_denda=:id_denda");
$sql->bindParam(':id_denda', $id_denda);
$execute = $sql->execute();
if($execute){
    echo "Data berhasil dihapus!";
    echo "<br><br><a href='index.php?page=readdenda'>Kembali</a>";
}else{
    echo "Data Gagal di Hapus. <a href='index.php?page=readdenda'>Kembali</a>";
}
?>