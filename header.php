<?php

ini_set('display_errors', 0);

session_start();

$username = $_SESSION['username'];

include('koneksi/koneksi.php') ;
include('koneksi/koneksi2.php') ;
include('admin/model/kategori/kategori.php'); 
include('admin/model/barang/barang.php');
include('admin/model/artikel/artikel.php'); 
include('model/keranjang/keranjang.php');
include('model/rating/rating.php');
include('model/komentar/komentar.php');

$id_kategori = $_GET['id_kategori'];
$id_barang = $_GET['id_barang'];
$id_artikel = $_GET['id_artikel'];
$id_keranjang = $_GET['id_keranjang'];
$cari = $_GET['cari'];

$kategori = $_GET['kategori'];

$read_kategori = kategori::read();
$read_barang = barang::read();
$read_artikel = artikel::read();
$read_index_artikel = artikel::read_index();
$read_keranjang = keranjang::read();
$read_index = barang::read_index();
$read_cari = barang::read_cari($cari);
$read_komentar = komentar::read($id_barang);
$bintang = rating::hasil($id_barang);
$tombol = rating::tombol($id_barang, $username);

$read_keranjang_s = keranjang::reads();

$banyak_keranjang = keranjang::banyak_keranjang($username);

$barang_kategori = barang::kategori($kategori);

$edit_kategori = kategori::get_edit($id_kategori);
$edit_barang = barang::get_edit($id_barang);
$edit_artikel = artikel::get_edit($id_artikel);
$edit_keranjang = keranjang::get_edit($id_keranjang);


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="assets/css/style.css" rel="stylesheet" />
<title>Belanja.com</title>
</head>

<body>

<?php if(empty($username)){ ?>
<div class="nav2">
	<div class="bingkai">
    <div class="logo"><a href="index.php"><img src="assets/img/logo5.jpg" style="height: 50px; float:left; line-height:50px;" /></a></div>
    	<div class="menu2">
        	<ul>
                <li><a href="login.php">Masuk</a></li>
                <li><a href="register.php">Daftar</a></li>
                <li><a href="index.php"><img src="assets/img/jam.png" style="height: 50px; float:left; line-height:60px;" /><strong><?= date('d-m-Y') ?></strong></a></li>
            </ul>
        </div>
    </div>	
</div>
<?php }else{ ?>
	<div class="nav2">
	<div class="bingkai">
      <div class="logo"><a href="index.php"><img src="assets/img/logo5.jpg" style="height: 50px; float:left; line-height:50px;" /></a></div>
    	<div class="menu2">
        	<ul>
            	<li><a href="index.php"><strong><?= date('d-m-Y') ?></strong></a></li>
            	<a href="keranjang.php"><img src="assets/img/keranjang2.jpg" class="keranjang" /> </a>
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </div>
    </div>	
</div>
<?php } ?>

<div class="nav">
	<div class="bingkai">
    	<div class="menu">
        	<ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="#.php">Kategori</a>
                	<ul>
                    <?php foreach($read_kategori as $val){ ?>
                        <li><a href="kategori.php?kategori=<?= $val['kategori'] ?>"><?= ucwords($val['kategori']) ?></a></li>
                    <?php } ?>
                    </ul>
                </li>
                <li><a href="katalog.php">Katalog</a></li>
                <li><a href="artikel.php">Artikel</a></li>
                <li><a href="kontak.php">Kontak</a></li>
                
                <form action="cari.php" method="get">
                <li style="margin-left:200px; line-height:50px; padding:0px; "><input type="text" name="cari" class="tulisan" placeholder="Cari"/> <input type="submit" value="Cari" /></li>
                </form>
            </ul>
        </div>
    </div>	
</div>

</body>
</html>