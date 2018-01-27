<?php include('header.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="jarak_atas bingkai">
	<div class="judul">Katalog</div>
    
    <?php
    	$per_hal = 12;
		$sql = mysql_query("SELECT COUNT(*) FROM barang");
		$res = mysql_result($sql, 0);
		
		$halaman = ceil($res / $per_hal);
		$page = (isset($_GET['page']) ? (int)$_GET['page'] : 1);
		$start = ($page - 1) * $per_hal;
		
		$query = mysql_query("SELECT * FROM barang LIMIT $start , $per_hal");
		while($res = mysql_fetch_array($query)){ ?>
			 <div class="gambar jarak_atas">
                <div class="bingkai_gambar"> 
                <?php
                    $gambar = str_replace('../../../','',$res['gambar']);
                ?>
                    <a href="detail_barang.php?id_barang=<?= $res['id_barang'] ?>"><img src="<?= $gambar ?>" /></a>
                    <p class="ket2"><?= ucwords($res['nama_barang']) ?></p>
                    <p class="ket">Rp. <?= ucwords($res['harga']) ?></p>
                    <a class="tombol" href="detail_barang.php?id_barang=<?= $res['id_barang'] ?>">Detail</a>
                </div>
            </div>
		<?php } ?>
    
    <div class="clear"></div>
    
    <br />  
    <div class="jarak_atas bingkai">
    	 <?php for($i=1; $i<=$halaman; $i++){?>
            <p align="center"><a class="halaman" href="?page=<?= $i ?>"><?= $i ?></a></p>
        <?php } ?>
    </div>
</div>


<?php include('footer.php') ?>