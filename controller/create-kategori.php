<?php

include "model/koneksi.php";

$nama_kategori = $_POST['nama_kategori'];

$sql = $pdo->prepare('INSERT INTO tb_kategori(nama_kategori) VALUES(:nama_kategori)');
$sql->bindParam(':nama_kategori', $nama_kategori);
$sql->execute();

?>