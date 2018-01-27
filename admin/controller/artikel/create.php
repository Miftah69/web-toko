<?php

include('../../../koneksi/koneksi.php');
include('../../model/artikel/artikel.php');


$judul = $_POST['judul'];
$isi = $_POST['isi'];

if(!empty($judul)){
	$create = artikel::create($judul, $isi);
	header('Location: ../../artikel.php');
}

?>