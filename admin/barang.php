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
	<div class="judul">Tambah Barang</div>
	<form method="post" action="controller/barang/create.php" enctype="multipart/form-data">
      <table width="1000px" border="0" class="jarak_atas">
        <tr>
          <td width="248" height="58" valign="top"><strong>Nama Barang</strong></td>
          <td width="742" valign="top">
          <input type="text" name="nama_barang" placeholder="Nama Barang" class="tulisan" required/></td>
        </tr>
        <tr>
          <td width="248" height="58" valign="top"><strong>Kategori Barang</strong></td>
          <td width="742" valign="top">
          <select name="kategori">
          	<option value="" disabled="disabled" selected="selected">-- Pilih --</option>
            <?php foreach($read_kategori as $kat){ ?>
            <option value="<?= $kat['kategori'] ?>"><?= ucwords($kat['kategori']) ?></option>
          	<?php } ?>
          </select>
          </td>
        </tr>
        <tr>
          <td width="248" height="58" valign="top"><strong>Harga</strong></td>
          <td width="742" valign="top">
          <input type="text" name="harga" placeholder="Harga" class="tulisan" required pattern="[0-9]{1,20}"/></td>
        </tr>
        <tr>
          <td width="248" height="46" valign="top"><strong>Stok</strong></td>
          <td width="742" valign="top">
          <input type="text" name="stok" placeholder="Stok" class="tulisan" required pattern="[0-9]{1,20}"/></td>
        </tr>
        <tr>
          <td width="248" height="70" valign="top"><strong>Definisi</strong></td>
          <td width="742" valign="top">
          <textarea name="keterangan" required class="area" placeholder="Definisi"></textarea></td>
        </tr>
        <tr>
          <td width="248" height="54" valign="top"><strong>Gambar</strong></td>
          <td width="742" valign="top">
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
	<div class="judul">Daftar Barang</div>
	
</div>
<table width="1000px" border="0" align="center" class="jarak_atas jarak_bawah">
  <tr>
    <td width="39" height="44" align="center" valign="top"><strong>No</strong></td>
    <td width="224" align="center" valign="top"><strong>Nama Barang</strong></td>
    <td width="206" align="center" valign="top"><strong>Harga</strong></td>
    <td width="167" align="center" valign="top"><strong>Stok Barang</strong></td>
    <td width="173" align="center" valign="top"><strong>Kategori Barang</strong></td>
    <td width="165" align="center" valign="top"><strong>Aksi</strong></td>
  </tr>
  <?php $i= 1; foreach($read_barang as $val){ ?>
  <tr>
    <td height="39" align="center"><?= $i++ ?></td>
    <td align="center"><?= ucwords($val['nama_barang']) ?></td>
    <td align="center"><?= ucwords($val['harga']) ?></td>
    <td align="center"><?= ucwords($val['stok']) ?></td>
    <td align="center"><?= ucwords($val['kategori']) ?></td>
    
    <td align="center">
    	<a href="ubah_barang.php?id_barang=<?= $val['id_barang'] ?>" class="link">Ubah</a>
    	<a href="controller/barang/delete.php?id_barang=<?= $val['id_barang'] ?>" class="link">Hapus</a>   
    </td>
  </tr>
  <?php } ?>
</table>
</body>
</html>