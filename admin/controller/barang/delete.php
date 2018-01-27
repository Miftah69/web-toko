<?php

include('../../../koneksi/koneksi.php');
include('../../model/barang/barang.php');

$id_barang = $_GET['id_barang'];

$delete = barang::delete($id_barang);
	header('Location: ../../barang.php');

?>