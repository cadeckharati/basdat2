<h1>Update Data</h1>
<?php
  // Load file koneksi.php
  include "model/koneksi.php";
  // Ambil data ID yang dikirim oleh index.php melalui URL
  $id_peminjaman = $_GET['id_peminjaman'];
  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM tb_peminjaman WHERE id_peminjaman=:id_peminjaman");
  $sql->bindParam(':id_peminjaman', $id_peminjaman);
  $sql->execute();
  $data = $sql->fetch();

  $sql_member = $pdo->query("SELECT id_member, nama FROM tb_member");
  $result_member = $sql_member->fetchAll(PDO::FETCH_ASSOC);

  $sql_buku = $pdo->query("SELECT id_buku, judul_buku FROM tb_buku");
  $result_buku = $sql_buku->fetchAll(PDO::FETCH_ASSOC);
  ?>
  <form method="post" action="index.php?page=ProsesUpdatePeminjaman&id_peminjaman=<?php echo $id_peminjaman; ?>">
    <table cellpadding="8">
      <tr>
        <td>Nama Member</td>
        <td><select name="nama" id="nama" required>
          <?php
          foreach ($result_member as $member) {
            echo "<option value='".$member['id_member']."'";
            if($data["id_member"] == $member['id_member']) echo "selected";
            echo ">".$member['nama']."</option>";
          }
          ?>
        </select></td>
      </tr>
      <tr>
        <td>Nama Buku</td>
        <td><select name="judul_buku" id="judul_buku">
          <?php
          foreach ($result_buku as $buku) {
            echo "<option value='".$buku['id_buku']."'";
            if($data["id_buku"] == $buku['id_buku']) echo "selected";
            echo ">".$buku['judul_buku']."</option>";
          }
          ?>
        </select></td>
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
