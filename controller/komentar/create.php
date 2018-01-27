<?php

include('../../koneksi/koneksi.php');
include('../../model/komentar/komentar.php');


$username = $_POST['username'];
$isi = $_POST['isi'];
$id_barang = $_POST['id_barang'];

if(!empty($username)){
	$create = komentar::create($username, $isi, $id_barang);
	header('Location: ../../detail_barang.php?id_barang='.$id_barang);
}

?>