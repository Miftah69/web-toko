<?php

include('../../../koneksi/koneksi.php');
include('../../model/artikel/artikel.php');

$id_artikel = $_POST['id_artikel'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

if(!empty($judul)){
	$update = artikel::update($id_artikel, $judul, $isi);
	header('Location: ../../artikel.php');
}

?>