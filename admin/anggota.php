<?php include('header.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="jarak_atas bingkai">
	<div class="judul">Menunggu Persetujuan</div>
<table width="437" border="0" class="jarak_atas">
  <tr>
    <td width="43" height="44" align="center" valign="top"><strong>No</strong></td>
    <td width="157" align="center" valign="top"><strong>Nama Pengguna</strong></td>
    <td width="223" align="center" valign="top"><strong>Aksi</strong></td>
  </tr>
  <?php $i= 1; foreach($belum as $val){ ?>
  <tr>
    <td height="39" align="center"><?= $i ?></td>
    <td align="center"><?= ucwords($val['username']) ?></td>
    <td align="center">
    <a href="controller/anggota/setujui.php?id_anggota=<?= $val['id_anggota'] ?>" class="link">Setujui</a> 
    <a href="../../controller/anggota/delete.php?id_anggota=<?= $val['id_anggota'] ?>" class="link">Hapus</a>   
    </td>
  </tr>
  <?php } ?>
</table>
</div>

<div class="jarak_atas bingkai">
	<div class="judul">Anggota</div>
<table width="437" border="0" class="jarak_atas">
  <tr>
    <td width="43" height="44" align="center" valign="top"><strong>No</strong></td>
    <td width="157" align="center" valign="top"><strong>Nama Pengguna</strong></td>
    <td width="223" align="center" valign="top"><strong>Aksi</strong></td>
  </tr>
  <?php $i= 1; foreach($read_anggota as $val){ ?>
  <tr>
    <td height="39" align="center"><?= $i++ ?></td>
    <td align="center"><?= ucwords($val['username']) ?></td>
    <td align="center">
    <a href="../../controller/anggota/delete.php?id_anggota=<?= $val['id_anggota'] ?>" class="link">Hapus</a>   
    </td>
  </tr>
  <?php } ?>
</table>
</div>

</body>
</html>