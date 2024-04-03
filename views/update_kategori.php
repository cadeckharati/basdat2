<h1>Update Data</h1>
<?php
  // Load file koneksi.php
  include "model/koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id_kategori = $_GET['id_kategori'];
  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM tb_kategori WHERE id_kategori=:id_kategori");
  $sql->bindParam(':id_kategori', $id_kategori);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="index.php?page=ProsesUpdateKategori&id_kategori=<?php echo $id_kategori; ?>">
    <table cellpadding="8">
      <tr>
        <td>Kategori</td>
        <td><input type="text" name="nama_kategori" value="<?php echo $data['nama_kategori']; ?>"></td>
      </tr>
    </table>
    <hr>

    <button type='submit' class="btn btn-success btn-icon-split">
        <span class='icon text-white-50'>
            <i class='fas fa-check'></i>
        
        </span>
        <span class='text'>Simpan</span>
    </button>
        <a href='index.php' class='btn btn-danger btn-icon-split'>
            <span class='icon text-white-50'>
                <i class='fas fa-trash'></i>
            </span>
            <span class='text'>Batal</span>
        </a>
        
  </form>
