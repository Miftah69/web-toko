<?php

include('../../../koneksi/koneksi.php');
include('../../model/barang/barang.php');


$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$keterangan = $_POST['keterangan'];
$kategori = $_POST['kategori'];

if(!empty($nama_barang)){
	$create = barang::create($nama_barang, $harga, $stok, $keterangan, $kategori);
	header('Location: ../../barang.php');
}

?>