<?php

include('../../../koneksi/koneksi.php');
include('../../model/kategori/kategori.php');


$kategori = $_POST['kategori'];

if(!empty($kategori)){
	$create = kategori::create($kategori);
	header('Location: ../../kategori.php');
}

?>