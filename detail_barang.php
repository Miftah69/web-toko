<?php include('header.php') ?>

<?php if($edit_barang['stok'] == 0){ ?>

<script>
	alert('Stok Barang Habis');
</script>

<?php } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div class="bingkai jarak_atas">
	<table width="900px" align="center" border="0">
    <tr>

        <td>&nbsp;</td>
        <?php if(!empty($_SESSION['username'])){ ?>
        <?php  if($edit_barang['stok'] !=0){ ?>
        <?php $tgl = date('d-m-Y') ?>
        <td><a href="controller/keranjang/create.php?jml=1&tgl=<?= $tgl ?>&username=<?= $username ?>&nama_barang=<?= $edit_barang['nama_barang'] ?>&id_barang=<?= $id_barang ?>" class="tombol">+ Keranjang</a></td>
        </tr>
        <?php }else{echo '';} ?>
        <?php }else{ echo '';}?>
        <tr>
        <?php
                $gambar = str_replace('../../../','',$edit_barang['gambar']);
            ?>
        <td width="109" rowspan="6"><img src="<?= $gambar ?>" class="gambar"  style="margin-right:30px;"/></td>
        <td width="198" height="49"><strong>Nama Barang</strong></td>
        <td width="479">: <?= ucwords($edit_barang['nama_barang']) ?></td>
      </tr>
      <tr>
        <td height="55"><strong>Harga</strong></td>
        <td>: <?= $edit_barang['harga'] ?></td>
      </tr>
      <tr>
        <td height="52"><strong>Spesifikasi</strong></td>
        <td>: <?= $edit_barang['keterangan'] ?></td>
      </tr>
      <tr>
        <td height="57"><strong>Rating</strong></td>
        <td>: 
        
        <?php if($tombol['tombol'] == 0){ ?>
        	Belum di beri rating
        <?php } ?>
        
		<?php $hasil = ceil($bintang['hasil']); for($i=1; $i<=$hasil; $i++){ ?>
			<img src="assets/img/bintang.png" class="rating" />
		<?php } ?>
		</td>
      </tr>
      
      <?php if(empty($_SESSION['username'])){ echo '';}else{ ?>
      
      <?php if($tombol['tombol'] == 0){ ?>
      <tr>
        <td height="62"><strong>Beri Rating</strong></td>
        <td><br /> <form action="controller/rating/create.php" method="post">
        <table width="200" border="0">
          <tr>
            <td><input type="hidden" name="username" required value="<?= $username ?>" readonly="readonly" /></td>
            <td><input type="hidden" name="id_barang" required value="<?= $edit_barang['id_barang'] ?>" readonly="readonly" /></td>
            <td>
            <select required name="jml_rating">
            	<option value="" disabled="disabled" selected="selected">-- Pilih --</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select></td>
            <td><input type="submit" value="Beri Rating" /></td>
          </tr>
         <?php }else{ echo '' ;}?>
         <?php } ?>
        </table>
</form></td>
      </tr>
      
    </table>
</div>

<div class="bingkai jarak_atas">
	<div class="judul">Komentar</div>
    <table width="500" border="0" class="jarak_atas">
    <?php foreach($read_komentar as $kom){ ?>
      <tr>
        <td width="133" height="47"><strong>Username</strong></td>
        <td width="857"><b><?= ucwords($kom['username']) ?></b></td>
      </tr>
      <tr>
        <td height="52"><strong>Tanggal</strong></td>
        <td><i><?= $kom['tgl'] ?></i></td>
      </tr>
      <tr>
        <td height="50"><strong>Isi</strong></td>
        <td><?= $kom['isi'] ?></td>
      </tr>
      <tr>
        <td colspan="2"><hr /></td>
      </tr>
      <?php } ?>
    </table>

</div>


<?php if(empty($_SESSION['username'])){ ?>
<div class="bingkai jarak_atas">
	<div class="judul">Beri Komentar</div>
    <form action="controller/komentar/create.php" method="post">
    	<table width="368" border="0" class="jarak_atas">
          <tr valign="top"><input type="hidden" name="id_barang" value="<?= $edit_barang['id_barang'] ?>" />
            <td width="166" height="81"><strong>Username</strong></td>
            <td width="186"><input type="text" name="username"  placeholder="Username" required class="tulisan" /></td>
          </tr>
          <tr valign="top">
            <td height="50"><strong>Isi</strong></td>
            <td><textarea name="isi" placeholder="Isi" required class="area" ></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" class="tombol" value="Kirim" /></td>
          </tr>
        </table>
    </form>
</div>
<?php }else{ ?>
<div class="bingkai jarak_atas">
	<div class="judul">Beri Komentar</div>
    <form action="controller/komentar/create.php" method="post">
    	<table width="368" border="0" class="jarak_atas">
          <tr valign="top"><input type="hidden" name="id_barang" value="<?= $edit_barang['id_barang'] ?>" />
            <td width="166" height="81"><strong>Username</strong></td>
            <td width="186"><input type="text" name="username" value="<?= $username ?>"  readonly="readonly" placeholder="Username" required class="tulisan" /></td>
          </tr>
          <tr valign="top">
            <td height="50"><strong>Isi</strong></td>
            <td><textarea name="isi" placeholder="Isi" required class="area" ></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" class="tombol" value="Kirim" /></td>
          </tr>
        </table>
    </form>
</div>
<?php } ?>

<?php include('footer.php') ?>