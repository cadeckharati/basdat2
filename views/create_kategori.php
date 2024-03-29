<h1>Tambah Data Barang</h1>
<form method="post" action="index.php?page=ProsesKategori">
    <table class="table table-bordered" id="dataTable" width="75%" cellspacing="0">
        <tr>
            <td>Kategori</td>
            <td><input type="text" name="nama_kategori"></td>
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