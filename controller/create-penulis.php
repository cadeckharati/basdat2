<?php

include "model/koneksi.php";

$nama_penulis = $_POST['nama_penulis'];

$sql = $pdo->prepare("INSERT INTO tb_penulis(nama_penulis) VALUES (:nama_penulis)");
$sql->bindParam(':nama_penulis', $nama_penulis);
$sql->execute();

?>