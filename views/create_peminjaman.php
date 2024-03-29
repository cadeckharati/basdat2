<h1>Tambah Data Barang</h1>
<form method="post" action="index.php?page=ProsesPeminjaman">
    <table class="table table-bordered" id="dataTable" width="75%" cellspacing="0">
        
        <tr>
            <td>ID Member</td>
            <td><input type="text" name="id_member"></td>
        </tr>
        <tr>
            <td>ID Buku</td>
            <td><input type="text" name="id_buku"></td>
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