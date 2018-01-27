<?php include('header.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="jarak_atas bingkai">
	<div class="judul">Kategori</div>
	<form method="post" action="controller/kategori/update.php">
      <table width="301" border="0" class="jarak_atas">
        <tr>
          <td width="110" height="46" valign="top"><strong>Kategori</strong></td>
          <td width="175" valign="top"><label for="textfield"></label>
           <input type="hidden" name="id_kategori" value="<?= $edit_kategori['id_kategori'] ?>"  />
          <input type="text" name="kategori" value="<?= $edit_kategori['kategori'] ?>" placeholder="Kategori" class="tulisan" required/></td>
        </tr>
        <tr>
          <td height="40" valign="top">&nbsp;</td>
          <td valign="top"> <input type="submit" value="Tambar" class="tombol" required/></td>
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