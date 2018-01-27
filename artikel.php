<?php include('header.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div class="bingkai jarak_atas">
	<div class="judul"> Berita Terbaru </div>
    <?php foreach($read_artikel as $val){ ?>
    	<table width="1000px" border="0" class="jarak_atas">
        <?php
                $gambar = str_replace('../../../','',$val['gambar']);
            ?>
          <tr>
            <td width="189" rowspan="4"><img src="<?= $gambar ?>" class="gambar_art" /></td>
            <td width="107" height=""><strong></strong></td>
            <td width="690"><font class="j_artikel"><?= ucwords($val['judul']) ?></font></td>
          </tr>
          <tr>
            <td height=""><strong></strong></td>
            <td><i>Tanggal Terbit <?= $val['tgl'] ?></i></td>
          </tr>
          <tr>
            <td height="79"><strong></strong></td>
            <td><?= substr($val['isi'], 0,500) ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><a class="tombol" href="detail_artikel.php?id_artikel=<?= $val['id_artikel'] ?>">Selengkapnya</a></td>
          </tr>
        </table>

    <?php } ?>
</div>

<?php include('footer.php') ?>