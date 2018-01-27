<?php

include('../../../koneksi/koneksi.php');
include('../../model/kategori/kategori.php');

$id_kategori = $_GET['id_kategori'];

$delete = kategori::delete($id_kategori);
	header('Location: ../../kategori.php');

?>