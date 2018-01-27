<?php

include('../../koneksi/koneksi.php');
include('../../model/anggota/anggota.php');

$id_anggota = $_GET['id_anggota'];

$delete = anggota::delete($id_anggota);
	header('Location: ../../login.php');

?>