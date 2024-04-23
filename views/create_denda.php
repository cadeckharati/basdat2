<h1>Tambah Data Barang</h1>
<form method="post" action="index.php?page=ProsesDenda">
    <table class="table table-bordered" id="dataTable" width="75%" cellspacing="0">
    <tr>
      <th>ID Peminjaman</th>
      <td>
        <select id="id_peminjaman" name="id_peminjaman" required>
          <option value="">-- Pilih ID --</option>
          <?php
            include "model/koneksi.php";

            try {
              $stmt = $pdo->prepare("SELECT id_peminjaman FROM tb_peminjaman");
              $stmt->execute();
              $result_pemimjaman = $stmt->fetchAll(PDO::FETCH_ASSOC);

              foreach ($result_pemimjaman as $tb_peminjaman) {
                echo "<option value='" . $tb_peminjaman["id_peminjaman"] . "'>" . $tb_peminjaman["id_peminjaman"] . "</option>";
              }
            } catch (PDOException $e) {
              echo "Terjadi kesalahan: " . $e->getMessage();
            }
          ?>
        </select>
      </td>
    </tr>
        <tr>
            <td>Total Denda</td>
            <td><input type="text" name="total_denda"></td>
        </tr>
        <tr>
            <td>Tanggal Bayar</td>
            <td><input type="date" name="tanggal_bayar"></td>
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