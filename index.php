<?php

include('header.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<div>
	<?php include('slide.php') ?>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		$('.data').fadeOut();
		$('.data').fadeIn();
	});
</script>



<script type="text/javascript">
	$(document).ready(function(){
		$('.data_atas').fadeOut();
		$('.data_atas').fadeIn();
		$('.data_atas').animate({left: '300px'});
		
		$('.data_atas2').fadeOut();
		$('.data_atas2').fadeIn();
		$('.data_atas2').animate({right: '300px'});
	});
</script>


<div class="bingkai jarak_atas clear">
	<div class="data_atas bingkai"><img src="assets/img/image/globe.jpg" class="g_index" /></div>
    <div class="data_atas2 bingkai"> 
    	<h1 class="kk">Blanja.com</h1>
    	Hidup jangan di buat ribet. Sekarang sudah nggak jaman yang ribet-ribetan. Hanya dengan duduk diam di rumah, anda sudah bisa menikmati barang yang anda inginkan. Tentunya hanya di BLANJA.COM . Dunia untuk kita semua. Hidup jangan di buat ribet. Sekarang sudah nggak jaman yang ribet-ribetan. Hanya dengan duduk diam di rumah, anda sudah bisa menikmati barang yang anda inginkan. Tentunya hanya di BLANJA.COM . Dunia untuk kita semua.     
    </div>
    
    <div class="clear"></div>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />


<div class="data gerak bingkai jarak_atas">
	<div class="konten jarak_atas">
    	<h2 class="bingkai" align="center" style="font-family:monospace; color: #333; font-size:30px;">Mengapa Memilih Belanja Online <hr width="100px" color="83c92b" /></h2>
    </div>
    <div class="clear"></div>
</div>


<div class="bingkai jarak_atas" >
	<div class="data"  style="width:250px;
	float:left;	 font-family:arial; text-align:center;"><h2>Banyak Pilihan</h2>
    	Lebih banyak pilihan . Lebih banyak pilihan . Lebih banyak pilihan . Lebih banyak pilihan . Lebih banyak pilihan . Lebih banyak pilihan . 
    </div>
    
    <div  class="data" style="width:250px;
	float:left;	
    margin-left:100px;
    margin-right:100px;font-family:arial; text-align:center;	"><h2>Biaya murah</h2>
    	Biaya Lebih Murah dan hemat tenaga . Biaya Lebih Murah dan hemat tenaga . Biaya Lebih Murah dan hemat tenaga . 
    </div>
    
    <div  class="data"  style="width:250px;
	float:left;	 font-family:arial; text-align:center;	"><h2>Tidak Ribet</h2>
    	Karena tidak perlu langsung ke produsen .Karena tidak perlu langsung ke produsen .Karena tidak perlu langsung ke produsen . 
    </div>
    <div class="clear"></div>
</div>

<br /><br /><br /><br />
<div class="bingkai jarak_atas">
	<div class="judul">Produk Terbaru</div>
   <?php foreach($read_index as $val){ ?>
    <div class="gambar jarak_atas">
    	<div class="bingkai_gambar"> 
        <?php
			$gambar = str_replace('../../../','',$val['gambar']);
		?>
        	<a href="detail_barang.php?id_barang=<?= $val['id_barang'] ?>"><img src="<?= $gambar ?>" /></a>
            <p class="ket2"><?= ucwords($val['nama_barang']) ?></p>
            <p class="ket">Rp. <?= ucwords($val['harga']) ?></p>
            <a class="tombol" href="detail_barang.php?id_barang=<?= $val['id_barang'] ?>">Detail</a>
        </div>
    </div>
    
    <?php } ?>
    <div class="clear"></div>
</div>

<div class=" data bingkai jarak_atas">
	<div class="judul"> Berita Terbaru</div>
    <?php foreach($read_index_artikel as $val){ ?>
    	<table width="1000px" border="0" class="jarak_atas">
        <?php
                $gambar = str_replace('../../../','',$val['gambar']);
            ?>
          <tr>
            <td width="189" rowspan="4"><img src="<?= $gambar ?>" class="gambar" /></td>
            <td width="107" height=""><strong></strong></td>
            <td width="690"><font class="jdl_artikel"><?= ucwords($val['judul']) ?></font></td>
          </tr>
          <tr>
            <td height=""><strong></strong></td>
            <td><i>Tanggal Terbit : <?= $val['tgl'] ?></i></td>
          </tr>
          <tr>
            <td height="79"><strong></strong></td>
            <td><?= substr($val['isi'], 0,500) ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
<a class="tombol" href="detail_artikel.php?id_artikel=<?= $val['id_artikel'] ?>">Selengkapnya</a></td>
          </tr>
        </table>

    <?php } ?>
</div>

<?php include('footer.php') ?>