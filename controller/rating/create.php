<?php

include('../../koneksi/koneksi.php');
include('../../model/rating/rating.php');

$id_barang = $_POST['id_barang'];
$username = $_POST['username'];
$jml_rating = $_POST['jml_rating'];

if(!empty($jml_rating)){
	$create = rating::create($id_barang, $username, $jml_rating);
	header('Location: ../../detail_barang.php?id_barang='.$id_barang);
}

?>