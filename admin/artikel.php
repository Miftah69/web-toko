<?php include('header.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="jarak_atas bingkai">
	<div class="judul">Tambah Artikel</div>
	<form method="post" action="controller/artikel/create.php" enctype="multipart/form-data">
      <table width="1000px" border="0" class="jarak_atas">
        <tr>
          <td width="174" height="58" valign="top"><strong>Judul Artikel</strong></td>
          <td width="816" valign="top">
          <input type="text" name="judul" placeholder="Judul Artikel" class="tulisan" required/></td>
        </tr>
        <tr>
          <td width="174" height="85" valign="top"><strong>Isi</strong></td>
          <td width="816" valign="top">
          <textarea name="isi" required class="area" placeholder="Isi"></textarea></td>
        </tr>
        <tr>
          <td width="174" height="97" valign="top"><strong>Gambar</strong></td>
          <td width="816" valign="top">
          <input type="file" name="gambar" required /></td>
        </tr>
        <tr>
          <td height="40" valign="top">&nbsp;</td>
          <td valign="top"> <input type="submit" value="Tambah" class="tombol" required/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
</form>
</div>

<div class="jarak_atas bingkai">
	<div class="judul">Daftar artikel</div>
	
</div>
<table width="1000px" border="0" align="center" class="jarak_atas jarak_bawah">
  <tr>
    <td width="39" height="44" align="center" valign="top"><strong>No</strong></td>
    <td width="224" align="center" valign="top"><strong>Judul</strong></td>
    <td width="206" align="center" valign="top"><strong>Tanggal Terbit</strong></td>
    <td width="165" align="center" valign="top"><strong>Aksi</strong></td>
  </tr>
  <?php $i= 1; foreach($read_artikel as $val){ ?>
  <tr>
    <td height="39" align="center"><?= $i++ ?></td>
    <td align="center"><?= ucwords($val['judul']) ?></td>
    <td align="center"><?= ucwords($val['tgl']) ?></td>
    
    <td align="center">
    	<a href="ubah_artikel.php?id_artikel=<?= $val['id_artikel'] ?>" class="link">Ubah</a>
    	<a href="controller/artikel/delete.php?id_artikel=<?= $val['id_artikel'] ?>" class="link">Hapus</a>   
    </td>
  </tr>
  <?php } ?>
</table>
</body>
</html>