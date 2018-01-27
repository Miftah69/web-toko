<?php include('header.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="jarak_atas bingkai">
	<a href="barang.php" class="tombol">Barang</a>
	<a href="kategori.php" class="tombol">Kategori</a>
</div>

<div class="jarak_atas bingkai">
	<div class="judul">Kategori</div>
	<form method="post" action="controller/kategori/create.php">
      <table width="301" border="0" class="jarak_atas">
        <tr>
          <td width="110" height="46" valign="top"><strong>Kategori</strong></td>
          <td width="175" valign="top"><label for="textfield"></label>
          <input type="text" name="kategori" placeholder="Kategori" class="tulisan" required/></td>
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
	<div class="judul">Daftar Kategori</div>
	
</div>
<table width="437" border="0" class="jarak_atas bingkai">
  <tr>
    <td width="43" height="44" align="center" valign="top"><strong>No</strong></td>
    <td width="157" align="center" valign="top"><strong>Kategori</strong></td>
    <td width="223" align="center" valign="top"><strong>Aksi</strong></td>
  </tr>
  <?php $i= 1; foreach($read_kategori as $val){ ?>
  <tr>
    <td height="39" align="center"><?= $i++ ?></td>
    <td align="center"><?= ucwords($val['kategori']) ?></td>
    <td align="center">
    	<a href="ubah_kategori.php?id_kategori=<?= $val['id_kategori'] ?>" class="link">Ubah</a>
    	<a href="controller/kategori/delete.php?id_kategori=<?= $val['id_kategori'] ?>" class="link">Hapus</a>   
    </td>
  </tr>
  <?php } ?>
</table>
</body>
</html>