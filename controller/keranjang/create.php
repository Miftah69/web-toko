<?php

include('../../koneksi/koneksi.php');
include('../../model/keranjang/keranjang.php');

$jml = $_GET['jml'];
$tgl = $_GET['tgl'];
$username = $_GET['username'];
$nama_barang = $_GET['nama_barang'];
$id_barang = $_GET['id_barang'];

if(!empty($username)){
	$create = keranjang::create($jml, $tgl, $username, $nama_barang,$id_barang);
	header('Location: ../../keranjang.php');
}

?>