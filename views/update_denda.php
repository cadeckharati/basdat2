<h1>Update Data</h1>
<?php
  // Load file koneksi.php
  include "model/koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id_denda = $_GET['id_denda'];
  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM tb_denda WHERE id_denda=:id_denda");
  $sql->bindParam(':id_denda', $id_denda);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="index.php?page=ProsesUpdateDenda&id_denda=<?php echo $id_denda; ?>">
    <table cellpadding="8">
      <tr>
        <td>Kode Pinjam</td>
        <td><input type="text" name="id_peminjaman" value="<?php echo $data['id_peminjaman']; ?>"></td>
      </tr>
      <tr>
        <td>Total Denda</td>
        <td><input type="text" name="total_denda" value="<?php echo $data['total_denda']; ?>"></td>
      </tr>
      <tr>
        <td>Tanggal Bayar</td>
        <td><input type="date" name="tanggal_bayar" value="<?php echo $data['tanggal_bayar']; ?>"></td>
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
