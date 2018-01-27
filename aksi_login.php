<?php

include('koneksi/koneksi2.php');

session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = mysql_query("SELECT * FROM anggota WHERE username = '$username' AND password = '$password' AND status = 1 ");
$res = mysql_num_rows($sql);

if($res == true){
	$_SESSION['username'] = $username;
	header('Location: index.php');
}else{
	header('Location: gagal.php');
}
?>