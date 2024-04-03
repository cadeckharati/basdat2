<?php
include "model/koneksi.php";

$id_member = $_GET["id_member"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$no_telpon = $_POST["no_telpon"];

$sql = $pdo->prepare("UPDATE tb_member SET nama=:nama, alamat=:alamat, no_telpon=:no_telpon WHERE id_member=:id_member");

$sql->bindParam(":nama", $nama);

$sql->bindParam(":alamat", $alamat);

$sql->bindParam(":no_telpon", $no_telpon);

$sql->bindParam(":id_member", $id_member);

$execute = $sql->execute();

if ($execute) {
    echo "Data berhasil diubah!";
    } else {
        echo "Data Gagal diubah. <a href='index.php'>Kembali</a>";
    }   

?>