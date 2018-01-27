<?php include('header.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="jarak_atas bingkai">
	<div class="judul">Form Pendaftar</div>
	<form method="post" action="controller/anggota/create.php" enctype="multipart/form-data">
      <table width="389" border="0" class="jarak_atas">
        <tr>
          <td width="158" height="58" valign="top"><strong>Username</strong></td>
          <td width="221" valign="top">
          <input type="text" name="username" placeholder="Username" class="tulisan" required/></td>
        </tr>
        <tr>
          <td width="158" height="58" valign="top"><strong>Kata Sandi</strong></td>
          <td width="221" valign="top">
          <input type="password" name="password" placeholder="Password" class="tulisan" required /></td>
        </tr>
        <tr>
          <td width="158" height="46" valign="top"><strong>No Telepon</strong></td>
          <td width="221" valign="top">
          <input type="text" name="no_tlp" placeholder="No_Telepon" class="tulisan" required/></td>
        </tr>
        <tr>
          <td width="158" height="70" valign="top"><strong>Alamat</strong></td>
          <td width="221" valign="top">
          <textarea name="alamat" required class="area" placeholder="Alamat"></textarea></td>
        </tr>
        <tr>
          <td width="158" height="54" valign="top"><strong>Gambar</strong></td>
          <td width="221" valign="top">
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

<?php include('footer.php') ?>