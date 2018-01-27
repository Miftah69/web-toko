<?php

include('../../../koneksi/koneksi.php');
include('../../model/kategori/kategori.php');

$id_kategori = $_POST['id_kategori'];
$kategori = $_POST['kategori'];

if(!empty($kategori)){
	$update = kategori::update($id_kategori, $kategori);
	header('Location: ../../kategori.php');
}

?>