<h1>Tambah Data Barang</h1>
<form method="post" action="index.php?page=ProsesBuku">
    <table class="table table-bordered" id="dataTable" width="75%" cellspacing="0">
        <tr>
            <td>Judul Buku</td>
            <td><input type="text" name="judul_buku"></td>
        </tr>

        <tr>
      <th>Nama Penulis</th>
      <td>
        <select id="id_penulis" name="id_penulis" required>
          <option value="">-- Pilih Penulis --</option>
          <?php
            include "model/koneksi.php";

            try {
              $stmt = $pdo->prepare("SELECT id_penulis, nama_penulis FROM tb_penulis");
              $stmt->execute();
              $result_penulis = $stmt->fetchAll(PDO::FETCH_ASSOC);

              foreach ($result_penulis as $tb_penulis) {
                echo "<option value='" . $tb_penulis["id_penulis"] . "'>" . $tb_penulis["nama_penulis"] . "</option>";
              }
            } catch (PDOException $e) {
              echo "Terjadi kesalahan: " . $e->getMessage();
            }
          ?>
        </select>
      </td>
    </tr>

        <tr>
            <td>Tahun Terbit</td>
            <td><input type="text" name="tahun_terbit"></td>
        </tr>
        <tr>
            <td>Stok Buku</td>
            <td><input type="text" name="stok"></td>
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