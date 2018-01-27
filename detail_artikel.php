<?php include('header.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

 <?php
	$gambar = str_replace('../../../','',$edit_artikel['gambar']);
 ?>

<div class="bingkai jarak_atas">
	<strong><em>Tanggal Terbit : <?= $edit_artikel['tgl'] ?></em></strong>
    <div class="clear"></div>
</div>

<div class="bingkai jarak_atas">
	<img src="<?= $gambar ?>" class="data_art" />
    <div class="clear"></div>
</div>
       
<div class="bingkai jarak_atas" style="float:left>
	<table width="1000px" border="0" class="jarak_atas">
          <tr>
            <td width="189" rowspan="4"></td>
            <td width="107" height="81"><strong></strong></td>
            <td width="690"><h1><?= ucwords($edit_artikel['judul']) ?></h3></td>
          </tr>
          <tr>
            <td height="79"><strong></strong></td>
            <td><?= $edit_artikel['isi'] ?></td>
          </tr>
        </table>
</div>

<?php include('footer.php') ?>