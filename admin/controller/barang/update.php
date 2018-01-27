<?php

include('../../../koneksi/koneksi.php');
include('../../model/barang/barang.php');

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$keterangan = $_POST['keterangan'];
$kategori = $_POST['kategori'];

if(!empty($nama_barang)){
	$update = barang::update($id_barang, $nama_barang, $harga, $stok, $keterangan, $kategori);
	header('Location: ../../barang.php');
}

?>