<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : '';
switch ($page) {
  case 'home': // $page == home (jika isi dari $page adalah home)
    include "views/home.php"; // load file home.php yang ada di folder views
    break;

    //controller create 
  case 'ProsesBuku':
    include "controller/create-buku.php";
    break;

  case 'ProsesPenulis':
    include "controller/create-penulis.php";
    break;

  case 'ProsesMember':
    include "controller/create-member.php";
    break;

  case 'ProsesDenda':
    include "controller/create-denda.php";
    break;

  case 'ProsesPeminjaman':
    include "controller/create-peminjaman.php";
    break;

  case 'ProsesKategori':
    include "controller/create-kategori.php";
    break;

    //controller hapus
  case 'ProsesHapusBuku':
    include "controller/delete-buku.php";
    break;
  
  case 'ProsesHapusDenda':
    include "controller/delete-denda.php";

    //controller update
  case 'ProsesUpdateBuku':
    include "controller/update-buku.php";
    break;

    //config create
  case 'createbuku':
    include "views/create_buku.php";
    break;

  case 'createpenulis':
    include "views/create_penulis.php";
    break;

  case 'createmember':
    include "views/create_member.php";
    break;

  case 'createdenda':
    include "views/create_denda.php";
    break;

  case 'createpeminjaman':
    include "views/create_peminjaman.php";
    break;

  case 'createkategori':
    include "views/create_kategori.php";
    break;

    // config read
  case 'readbuku':
    include "views/view_buku.php";
    break;

  case 'readdenda':
    include "views/view_denda.php";
    break;

  case 'readkategori':
    include "views/view_kategori.php";
    break;

  case 'readmember':
    include "views/view_member.php";
    break;

  case 'readpeminjaman':
    include "views/view_peminjaman.php";
    break;

  case 'readpenulis':
    include "views/view_penulis.php";
    break;

    //config update
  case 'updatebuku':
    include "views/update_buku.php";
    break;
  
  case 'updatedenda':
    include "views/update_denda.php";
    break;

  case 'updatekategori':
    include "views/update_kategori.php";
    break;

  case 'updatemember':
    include "views/update_member.php";
    break;

  case 'updatepeminjaman':
    include "views/update_peminjaman.php";
    break;

  case 'updatepenulis':
    include "views/update_penulis.php";
    break;
    
  default: // Ini untuk set default jika isi dari $page tidak ada pada 3 kondisi diatas
    include "views/home.php";
}
