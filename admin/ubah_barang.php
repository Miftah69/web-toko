<?php include('header.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="jarak_atas bingkai">
	<div class="judul">Ubah Detail Barang</div>
	<form method="post" action="controller/barang/update.php" enctype="multipart/form-data">
      <table width="1000px" border="0" class="jarak_atas">
        <tr>
          <td width="195" height="58" valign="top"><strong>Nama Barang</strong></td>
          <td width="795" valign="top">
          <input type="hidden" name="id_barang" value="<?= $edit_barang['id_barang'] ?>" placeholder="Nama Barang" class="tulisan" required/>
          <input type="text" name="nama_barang" value="<?= $edit_barang['nama_barang'] ?>"  placeholder="Nama Barang" class="tulisan" required/></td>
        </tr>
        <tr>
          <td width="195" height="58" valign="top"><strong>Kategori Barang</strong></td>
          <td width="795" valign="top">
          <select name="kategori" required>
          	<option value="">-- Pilih --</option>
            <?php foreach($read_kategori as $kat){ ?>
            <option value="<?= $kat['kategori'] ?>"><?= ucwords($kat['kategori']) ?></option>
          	<?php } ?>
          </select>
          </td>
        </tr>
        <tr>
          <td width="195" height="58" valign="top"><strong>Harga</strong></td>
          <td width="795" valign="top">
          <input type="text" name="harga" placeholder="Harga" value="<?= $edit_barang['harga'] ?>"  class="tulisan" required pattern="[0-9]{1,20}"/></td>
        </tr>
        <tr>
          <td width="195" height="46" valign="top"><strong>Stok</strong></td>
          <td width="795" valign="top">
          <input type="text" name="stok" value="<?= $edit_barang['stok'] ?>"  placeholder="Stok" class="tulisan" required pattern="[0-9]{1,20}"/></td>
        </tr>
        <tr>
          <td width="195" height="70" valign="top"><strong>Definisi</strong></td>
          <td width="795" valign="top">
          <textarea name="keterangan" required class="area" placeholder="Definisi"><?= $edit_barang['keterangan'] ?>  </textarea></td>
        </tr>
        <tr>
          <td width="195" height="54" valign="top"><strong>Ganti Gambar</strong></td>
          <td width="795" valign="top">
          <input type="file" name="gambar" required /></td>
        </tr>
        <tr>
          <td width="195" height="54" valign="top"><strong>Gambar</strong></td>
          <td width="795" valign="top">
          <?php 
		  	$gambar = str_replace('../../../','../',$edit_barang['gambar']);
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