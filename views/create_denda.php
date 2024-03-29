<h1>Tambah Data Barang</h1>
<form method="post" action="index.php?page=ProsesDenda">
    <table class="table table-bordered" id="dataTable" width="75%" cellspacing="0">
        <tr>
            <td>Kode Pinjam</td>
            <td><input type="text" name="id_peminjaman"></td>
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