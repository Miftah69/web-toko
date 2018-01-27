<?php

include('../koneksi/koneksi.php') ;
include('model/kategori/kategori.php'); 
include('model/barang/barang.php');
include('../model/keranjang/keranjang.php');
include('../model/anggota/anggota.php');
include('model/artikel/artikel.php'); 


session_start();

$username = $_SESSION['username'];
if(empty($_SESSION['username'])){
	header('Location: login.php');
}

ini_set('display_errors', '0');
$id_kategori = $_GET['id_kategori'];
$id_barang = $_GET['id_barang'];
$id_artikel = $_GET['id_artikel'];
$id_anggota = $_GET['id_anggota'];

$read_kategori = kategori::read();
$read_barang = barang::read();
$read_artikel = artikel::read();
$read_anggota = anggota::read();
$read_keranjang = keranjang::keranjang_admin();
$sudah_dikirim = keranjang::sudah_dikirim();
$belum = anggota::belum();

$edit_kategori = kategori::get_edit($id_kategori);
$edit_barang = barang::get_edit($id_barang);
$edit_artikel = artikel::get_edit($id_artikel);

$notif = anggota::notif();
$notif_tran = keranjang::notif();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../assets/css/style.css" rel="stylesheet" />
<title>Admin</title>
</head>

<body>

<div class="nav2">
	<div class="bingkai">
    <div class="logo"><a href="index.php"><img src="../assets/img/logo5.jpg" style="height: 50px; float:left; line-height:60px;" /></a></div>
    	<div class="menu2">
        	<ul>
                <li><a href="index.php"><img src="../assets/img/jam.png" style="height: 50px; float:left; line-height:60px;" /><strong><?= date('d-m-Y') ?></strong></a></li>
                
                <li><a href="logout.php">Keluar</a></li>
            </ul>
        </div>
    </div>	
</div>

<div class="nav">
	<div class="bingkai">
    	<div class="menu">
        	<ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="anggota.php">Anggota <font class="notif"> <?= $notif['notif'] ?></font></a></li>
                <li><a href="barang.php">Barang</a></li>
                <li><a href="artikel.php">Artikel</a></li>
                <li><a href="transaksi.php">Transaksi <font class="notif"><?= $notif_tran['notif'] ?></font> </a></li>
            </ul>
        </div>
    </div>	
</div>

</body>
</html>