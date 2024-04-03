<h1>Update Data</h1>
<?php
  // Load file koneksi.php
  include "model/koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id_penulis = $_GET['id_penulis'];
  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM tb_penulis WHERE id_penulis=:id_penulis");
  $sql->bindParam(':id_penulis', $id_penulis);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="index.php?page=ProsesUpdatePenulis&id_penulis=<?php echo $id_penulis; ?>">
    <table cellpadding="8">
      <tr>
        <td>Nama Penulis</td>
        <td><input type="text" name="nama_penulis" value="<?php echo $data['nama_penulis']; ?>"></td>
      </tr>
    </table>
  
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
