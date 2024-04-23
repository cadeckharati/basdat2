<h1>Tambah Data Barang</h1>
<form method="post" action="index.php?page=ProsesPeminjaman">
    <table class="table table-bordered" id="dataTable" width="75%" cellspacing="0">
        
    <tr>
      <th>Nama Member</th>
      <td>
        <select id="id_member" name="id_member" required>
          <option value="">-- Pilih Member --</option>
          <?php
            include "model/koneksi.php";

            try {
              $stmt = $pdo->prepare("SELECT id_member, nama FROM tb_member");
              $stmt->execute();
              $result_member = $stmt->fetchAll(PDO::FETCH_ASSOC);

              foreach ($result_member as $tb_member) {
                echo "<option value='" . $tb_member["id_member"] . "'>" . $tb_member["nama"] . "</option>";
              }
            } catch (PDOException $e) {
              echo "Terjadi kesalahan: " . $e->getMessage();
            }
          ?>
        </select>
      </td>
    </tr>

        <tr>
      <th>Nama Buku</th>
      <td>
        <select id="id_buku" name="id_buku" required>
          <option value="">-- Pilih Buku --</option>
          <?php
            include "model/koneksi.php";

            try {
              $stmt = $pdo->prepare("SELECT id_buku, judul_buku FROM tb_buku");
              $stmt->execute();
              $result_buku = $stmt->fetchAll(PDO::FETCH_ASSOC);

              foreach ($result_buku as $tb_buku) {
                echo "<option value='" . $tb_buku["id_buku"] . "'>" . $tb_buku["judul_buku"] . "</option>";
              }
            } catch (PDOException $e) {
              echo "Terjadi kesalahan: " . $e->getMessage();
            }
          ?>
        </select>
      </td>
    </tr>
    
        <tr>
            <td>Tanggal Peminjaman</td>
            <td><input type="date" name="tanggal_pinjam"></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td><input type="date" name="tanggal_kembali"></td>
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