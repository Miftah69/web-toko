<?php

include('../../../koneksi/koneksi.php');
include('../../../model/keranjang/keranjang.php');

$id_keranjang = $_GET['id_keranjang'];
$id_barang = $_GET['id_barang'];
$username = $_GET['username'];
$total = $_GET['total'];
$nama_barang = $_GET['nama_barang'];
$jml = $_GET['jml'];

if(!empty($id_barang)){
	$transaksi = keranjang::transaksi($id_barang,$username, $total, $nama_barang, $jml);
	$ubah_keranjang = keranjang::ubah_keranjang($id_keranjang);
	$stok = keranjang::stok($id_barang, $jml);
	header('Location: ../../transaksi.php');
}

?>