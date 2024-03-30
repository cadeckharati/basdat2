<?php

include "model/koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telpon'];

$sql = $pdo->prepare("INSERT INTO tb_member(nama, alamat, no_telpon) VALUES (:nama, :alamat, :no_telpon)");
$sql->bindParam(':nama',$nama);
$sql->bindParam(':alamat',$alamat);
$sql->bindParam(':no_telpon', $no_telpon);
$execute = $sql->execute();
if($execute){
    echo "Data berhasil ditambahkan!";
}else{
    echo "Data Gagal ditambahkan. <a href='index.php'>Kembali</a>";
}
?>