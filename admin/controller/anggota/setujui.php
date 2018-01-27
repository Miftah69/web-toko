<?php

include('../../../koneksi/koneksi.php');
include('../../../model/anggota/anggota.php');

$id_anggota = $_GET['id_anggota'];

if(!empty($id_anggota)){
	$register = anggota::register($id_anggota);
	header('Location: ../../anggota.php');
}

?>