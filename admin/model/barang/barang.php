<?php

class barang{
	public function create($nama_barang, $harga, $stok, $keterangan, $kategori){
		global $db;
		
		$folder = '../../../assets/img/';
		$nama_file = $folder.date('YmdHis').basename($_FILES['gambar']['name']);
		$ok = 1;
		
		if($ok == 0){
			echo 'gagal';
			$ok = 0;
		}else{
			if(move_uploaded_file($_FILES['gambar']['tmp_name'], $nama_file)){
				header('Location: ../../barang.php');
				$ok = 1;
			}
		}
		
		$sql = "INSERT INTO barang SET nama_barang = '$nama_barang', harga = '$harga', stok = '$stok', keterangan = '$keterangan', kategori = '$kategori', gambar = '".$nama_file."' ";
		$res = $db->query($sql);
	}
	
	public function read(){
		global $db;
		$sql = "SELECT * FROM barang ORDER BY id_barang DESC";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$i = 0;
			$list = '';
			while($row = $res->fetch_array()){
				$list[$i] = $row;
				$i++;
			}
			return $list;
		}
	}
	
	public function get_edit($id_barang){
		global $db;
		$sql = "SELECT * FROM barang WHERE id_barang = '{$id_barang}' ";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$row = $res->fetch_array();
			return $row;
		}

	}
	
	public function update($id_barang, $nama_barang, $harga, $stok, $keterangan, $kategori){
		global $db;
		
		$folder = '../../../assets/img/';
		$nama_file = $folder.date('YmdHis').basename($_FILES['gambar']['name']);
		$ok = 1;
		
		if($ok == 0){
			echo 'gagal';
			$ok = 0;
		}else{
			if(move_uploaded_file($_FILES['gambar']['tmp_name'], $nama_file)){
				header('Location: ../../barang.php');
				$ok = 1;
			}
		}
		
		$sql = "UPDATE barang SET nama_barang = '$nama_barang', harga = '$harga', stok = '$stok', keterangan = '$keterangan', kategori = '$kategori', gambar = '".$nama_file."'  WHERE id_barang = '{$id_barang}'  ";
		$res = $db->query($sql);
	}
	
	public function delete($id_barang){
		global $db;
		$sql = "DELETE FROM barang WHERE id_barang = '{$id_barang}' ";
		$res = $db->query($sql);
	}
	
	public function kategori($kategori){
		global $db;
		$sql = "SELECT * FROM barang WHERE kategori = '$kategori' ORDER BY id_barang DESC";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$i = 0;
			$list = '';
			while($row = $res->fetch_array()){
				$list[$i] = $row;
				$i++;
			}
			return $list;
		}
	}
	
	public function read_cari($cari){
		global $db;
		$sql = "SELECT * FROM barang where nama_barang LIKE '%$cari%' or kategori LIKE '%$cari%' ORDER BY id_barang DESC";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$i = 0;
			$list = '';
			while($row = $res->fetch_array()){
				$list[$i] = $row;
				$i++;
			}
			return $list;
		}
	}
	
	public function read_index(){
		global $db;
		$sql = "SELECT * FROM barang  ORDER BY id_barang DESC LIMIT 0,8";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$i = 0;
			$list = '';
			while($row = $res->fetch_array()){
				$list[$i] = $row;
				$i++;
			}
			return $list;
		}
	}
}


?>