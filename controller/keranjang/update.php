<?php

include('../../koneksi/koneksi.php');
include('../../model/keranjang/keranjang.php');

$id_keranjang = $_POST['id_keranjang'];
$jml = $_POST['jml'];

if(!empty($id_keranjang)){
	$update = keranjang::update($id_keranjang,$jml);
	header('Location: ../../keranjang.php');
}

?>