<h1>Update Data</h1>
<?php
  // Load file koneksi.php
  include "model/koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id_buku = $_GET['id_buku'];
  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM tb_buku WHERE id_buku=:id_buku");
  $sql->bindParam(':id_buku', $id_buku);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="index.php?page=ProsesUpdateBuku&id_buku=<?php echo $id_buku; ?>">
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

    <button type='submit' class="btn btn-success btn-icon-split">
        <span class='icon text-white-50'>
            <i class='fas fa-check'></i>
        
        </span>
        <span class='text'>Update</span>
    </button>
    <a href='index.php' class='btn btn-danger btn-icon-split'>
            <span class='icon text-white-50'>
                <i class='fas fa-trash'></i>
            </span>
            <span class='text'>Batal</span>
        </a>
    
  </form>
