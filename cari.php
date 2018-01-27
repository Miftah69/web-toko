<?php include('header.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="jarak_atas bingkai">
	<div class="judul">Pencarian " <?= $_GET['cari'] ?> "</div>
   
    <?php foreach($read_cari as $val){ ?>
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


<?php include('footer.php') ?>