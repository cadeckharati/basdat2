<?php
include "model/koneksi.php";

$id_buku = $_GET['id_buku'];
$judul_buku = $_POST['judul_buku'];
$id_penulis = $_POST['nama_penulis']; // Changed from id_penulis to nama_penulis
$stok = $_POST['stok'];
$tahun_terbit = $_POST['tahun_terbit'];

// Prepare SQL statement to update the book record
$sql = $pdo->prepare("UPDATE tb_buku SET judul_buku=:judul_buku, id_penulis=:id_penulis, stok=:stok, tahun_terbit=:tahun_terbit WHERE id_buku=:id_buku");
$sql->bindParam(':judul_buku', $judul_buku);
$sql->bindParam(':id_penulis', $id_penulis);
$sql->bindParam(':stok', $stok);
$sql->bindParam(':tahun_terbit', $tahun_terbit);
$sql->bindParam(':id_buku', $id_buku);

// Execute the SQL statement
$execute = $sql->execute();

// Check if the update was successful
if($execute){
    echo "Data berhasil diupdate!";
}else{
    echo "Data Gagal diupdate. <a href='index.php'>Kembali</a>";
}
?>
