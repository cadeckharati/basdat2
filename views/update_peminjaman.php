<h1>Update Data</h1>
<?php
  // Load file koneksi.php
  include "model/koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id_peminjaman = $_GET['id_peminjaman'];
  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM tb_perpustakaan WHERE id_buku=:id_buku");
  $sql->bindParam(':id_peminjaman', $id_peminjaman);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="index.php?page=ubah&id_peminjaman=<?php echo $id_peminjaman; ?>">
    <table cellpadding="8">
      <tr>
        <td>ID Member</td>
        <td><input type="text" name="id_member" value="<?php echo $data['id_member']; ?>"></td>
      </tr>
      <tr>
        <td>ID Buku</td>
        <td><input type="text" name="id_buku" value="<?php echo $data['id_buku']; ?>"></td>
      </tr>
      <tr>
        <td>Tanggal Peminjaman</td>
        <td><input type="date" name="tanggal_pinjam" value="<?php echo $data['tanggal_pinjam']; ?>"></td>
      </tr>
      <tr>
        <td>Tanggal Kembali</td>
        <td><input type="date" name="tanggal_kembali" value="<?php echo $data['tanggal_kembali']; ?>"></td>
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
