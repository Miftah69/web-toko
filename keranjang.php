<?php include('header.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="bingkai jarak_atas">
	<div class="judul">Keranjang</div>
    <table width="1000" border="0" class="jarak_atas">
      <tr align="center">
        <td height="49"><strong>No</strong></td>
        <td><strong>Nama Barang</strong></td>
        <td><strong>Jumlah</strong></td>
        <td><strong>Tanggal</strong></td>
        <td><strong>Aksi</strong></td>
      </tr>
      <?php $i=1; foreach($read_keranjang as $val){ ?>
      <tr align="center">
        <td><?= $i ?></td>
        <td><?= ucwords($val['nama_barang']) ?></td>
        <td><?= $val['jml'] ?></td>
        <td><?= $val['tgl'] ?></td>
        <td>
        	<a href="ubah_keranjang.php?id_keranjang=<?= $val['id_keranjang'] ?>" class="link">Ubah</a>
            <a href="controller/keranjang/delete.php?id_keranjang=<?= $val['id_keranjang'] ?>" class="link">Hapus</a>
            <a href="controller/keranjang/selesai.php?id_keranjang=<?= $val['id_keranjang'] ?>" class="link">Selesai</a>
        </td>
      </tr>
      <?php } ?>
</table>

</div>


<div class="bingkai jarak_atas">
	<div class="judul">Dalam Pengiriman</div>
    <table width="1000" border="0" class="jarak_atas jarak_bawah">
      <tr align="center">
        <td height="49"><strong>No</strong></td>
        <td><strong>Nama Barang</strong></td>
        <td><strong>Jumlah</strong></td>
        <td><strong>Tanggal</strong></td>
      </tr>
      <?php $i=1; foreach($read_keranjang_s as $val){ ?>
      <tr align="center">
        <td><?= $i ?></td>
        <td><?= ucwords($val['nama_barang']) ?></td>
        <td><?= $val['jml'] ?></td>
        <td><?= $val['tgl'] ?></td>
      </tr>
      <?php } ?>
</table>
<br />
<br />
<div class="clear"></div><br />
<br />
<br />

</div>

<div class="bingkai">
	<p style="font-size: 18px"><strong>Petujuk Penggunaan Keranjang Belanja :</strong>  </p>
    
    <ul type="1">
    	<li>Klik tombol selesai untuk mengakhiri transaksi di keranjang belanja.</li>
        <li>Segera hubungi pihak Blanja.com jika telah selesai memilih barang . Untuk jelasnya <a href="kontak.php">Klik Disini</a></li>
    </ul>
    
</div>


<?php include('footer.php') ?>