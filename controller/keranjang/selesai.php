<?php

include('../../koneksi/koneksi.php');
include('../../model/keranjang/keranjang.php');

$id_keranjang = $_GET['id_keranjang'];

if(!empty($id_keranjang)){
	$selesai = keranjang::selesai($id_keranjang);
	header('Location: ../../keranjang.php');
}

?>