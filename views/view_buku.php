<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Buku</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>ID Buku</th>
                        <th>Judul Buku</th>
                        <th>Nama Penulis</th>
                        <th>Tahun Terbit</th>
                        <th>Stok Buku</th>
                        <th colspan="2" style="text-align: center;">Aksi</th>

                    </tr>
                    <?php
                    include "model/koneksi.php";

                    $sql = $pdo->prepare("SELECT tb_buku.id_buku, tb_buku.judul_buku, tb_penulis.nama_penulis AS nama_penulis, tb_buku.tahun_terbit, tb_buku.stok FROM tb_buku INNER JOIN tb_penulis ON tb_buku.id_penulis = tb_penulis.id_penulis");
                    $sql->execute();
                    while ($data = $sql->fetch()) {
                        echo "<tr>";
                        echo "<td>" . $data['id_buku'] . "</td>";
                        echo "<td>" . $data['judul_buku'] . "</td>";
                        echo "<td>" . $data['nama_penulis'] . "</td>";
                        echo "<td>" . $data['tahun_terbit'] . "</td>";
                        echo "<td>" . $data['stok'] . "</td>";
                        echo "<td><a href='index.php?page=updatebuku&id_buku=" . $data['id_buku'] . "' onclick='return confirm(\"Apakah Anda yakin ingin mengedit data dengan Judul ".$data['judul_buku']."?\")'' class='btn btn-primary btn-icon-split'>
                                <span class='icon text-white-50'>
                                    <i class='fas fa-flag'></i>
                                </span>
                                <span class='text'>Edit</span>
                                </a></td>";
                        echo "<td><a href='index.php?page=ProsesHapusBuku&id_buku=" . $data['id_buku'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data dengan Judul ".$data['judul_buku']."?\")'' class='btn btn-danger btn-icon-split'>
                                        <span class='icon text-white-50'>
                                            <i class='fas fa-trash'></i>
                                        </span>
                                <span class='text'>Hapus</span>
                                </a></td>";
                        echo "</tr>";
                       //' onclick='return confirm(\"Apakah Anda yakin ingin mengedit data dengan Judul ".$data['judul_buku']."?\")'
                        //' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data dengan Judul ".$data['judul_buku']."?\")'
        
                    }
                    ?>

                </table>
                <td><a href='index.php?page=createbuku' class='btn btn-success btn-icon-split'>
                        <span class='icon text-white-50'>
                            <i class='fas fa-arrow-right'></i>
                        </span>
                        <span class='text'>Input Data</span>
                    </a></td>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->