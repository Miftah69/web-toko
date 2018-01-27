<?php include('header.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="jarak_atas bingkai">
	<div class="judul">Ubah Detail Artikel</div>
	<form method="post" action="controller/artikel/update.php" enctype="multipart/form-data">
      <table width="1000px" border="0" class="jarak_atas">
        <tr>
          <td width="200" height="58" valign="top"><strong>Nama artikel</strong></td>
          <td width="790" valign="top">
          <input type="hidden" name="id_artikel" value="<?= $edit_artikel['id_artikel'] ?>" placeholder="Nama artikel" class="tulisan" required/>
          <input type="text" name="judul" value="<?= $edit_artikel['judul'] ?>"  placeholder="Nama artikel" class="tulisan" required/></td>
        </tr>
        <tr>
          <td width="200" height="70" valign="top"><strong>Definisi</strong></td>
          <td width="790" valign="top">
          <textarea name="isi" required class="area" placeholder="Definisi"><?= $edit_artikel['isi'] ?>  </textarea></td>
        </tr>
        <tr>
          <td width="200" height="54" valign="top"><strong>Ganti Gambar</strong></td>
          <td width="790" valign="top">
          <input type="file" name="gambar" required /></td>
        </tr>
        <tr>
          <td width="200" height="54" valign="top"><strong>Gambar</strong></td>
          <td width="790" valign="top">
          <?php 
		  	$gambar = str_replace('../../../','../',$edit_artikel['gambar']);
		  ?>
          	<img src="<?=$gambar ?>" class="d_gambar" />
          </td>
        </tr>
        <tr>
          <td height="40" valign="top">&nbsp;</td>
          <td valign="top"> <input type="submit" value="Ubah" class="tombol" required/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
</form>
</div>

</body>
</html>