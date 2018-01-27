<?php

include('../../koneksi/koneksi.php');
include('../../model/anggota/anggota.php');


$username = $_POST['username'];
$password = md5($_POST['password']);
$no_tlp = $_POST['no_tlp'];
$alamat = $_POST['alamat'];

if(!empty($username)){
	$create = anggota::create($username, $password, $no_tlp, $alamat);
	header('Location: ../../login.php');
}

?>