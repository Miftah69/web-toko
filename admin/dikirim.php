<?php include('header.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="jarak_atas bingkai">
	<a href="dikirim.php" class="tombol">Dikirim</a>
	<a href="transaksi.php" class="tombol">Menunggu Persetujuan</a>
</div>

<div class="bingkai jarak_atas">
<div class="judul">Sudah Dikirim</div>
	<table width="1000px" border="0">
      <tr align="center">
        <td width="40" height="49"><strong>No</strong></td>
        <td width="148"><strong>Pengguna</strong></td>
        <td width="207"><strong>Nama Barang</strong></td>
        <td width="108"><strong>Jumlah</strong></td>
        <td width="133"><strong>Total Bayar</strong></td>
        <td width="150"><strong>Tanggal Kirim</strong></td>
      </tr>
      <?php $i=1; foreach($sudah_dikirim as $val){ ?>
      <tr align="center">
        <td height="55"><?= $i++ ?></td>
        <td><?= ucwords($val['username']) ?></td>
        <td><?= ucwords($val['nama_barang']) ?></td>
        <td><?= $val['jml'] ?></td>
        <td><?= $val['tot'] ?></td>
        <td><?= $val['tgl'] ?></td>
      </tr>
      <?php } ?>
    </table>

</div>

</body>
</html>