<?php
include "model/koneksi.php";

$id_penulis = $_GET["id_penulis"];
$nama_penulis = $_POST["nama_penulis"];

$sql = $pdo->prepare("UPDATE tb_penulis SET nama_penulis=:nama_penulis WHERE id_penulis=:id_penulis");

$sql->bindParam(":nama_penulis", $nama_penulis);

$sql->bindParam(":id_penulis", $id_penulis);

$execute = $sql->execute();

if ($execute) {
    echo "Data berhasil diubah!";
    } else {
        echo "Data Gagal diubah. <a href='index.php'>Kembali</a>";
    }


?>