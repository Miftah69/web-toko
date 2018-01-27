<?php

include('../../../koneksi/koneksi.php');
include('../../model/artikel/artikel.php');

$id_artikel = $_GET['id_artikel'];

$delete = artikel::delete($id_artikel);
	header('Location: ../../artikel.php');

?>