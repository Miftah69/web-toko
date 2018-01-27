<?php

include('../../koneksi/koneksi.php');
include('../../model/anggota/anggota.php');

$id_anggota = $_POST['id_anggota'];
$username = $_POST['username'];
$password = $_POST['password'];
$no_tlp = $_POST['no_tlp'];
$alamat = $_POST['alamat'];

if(!empty($username)){
	$update = anggota::update( $id_anggota, $username, $password, $no_tlp, $alamat);
	header('Location: ../../login.php');
}

?>