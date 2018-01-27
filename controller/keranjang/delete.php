<?php

include('../../koneksi/koneksi.php');
include('../../model/keranjang/keranjang.php');

$id_keranjang = $_GET['id_keranjang'];

$delete = keranjang::delete($id_keranjang);
header('Location: ../../keranjang.php');

?>