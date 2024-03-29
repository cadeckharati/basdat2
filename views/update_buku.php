<h1>Update Data</h1>
<?php
  // Load file koneksi.php
  include "koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id_kopi = $_GET['id_kopi'];
  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM tb_perpustakaan WHERE id_buku=:id_buku");
  $sql->bindParam(':id_kopi', $id_kopi);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="index.php?page=ubah&id_kopi=<?php echo $id_kopi; ?>">
    <table cellpadding="8">
      <tr>
        <td>Judul Buku</td>
        <td><input type="text" name="judul_buku" value="<?php echo $data['judul_buku']; ?>"></td>
      </tr>
      <tr>
        <td>ID Penulis</td>
        <td><input type="text" name="id_penulis" value="<?php echo $data['id_penulis']; ?>"></td>
      </tr>
      <tr>
        <td>Tahun Terbit</td>
        <td><input type="text" name="tahun_terbit" value="<?php echo $data['tahun_terbit']; ?>"></td>
      </tr>
      <tr>
        <td>Stok Buku</td>
        <td><input type="text" name="stok" value="<?php echo $data['stok']; ?>"></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
