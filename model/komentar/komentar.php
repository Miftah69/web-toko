<?php

class Komentar{
	public function create($username, $isi, $id_barang){
		global $db;
		
		$tgl = date('d-m-Y');
		$sql = "INSERT INTO komentar SET username = '$username', isi = '$isi', id_barang = '$id_barang', tgl = '$tgl' ";
		$res = $db->query($sql);
	}
	
	public function read($id_barang){
		global $db;
		$sql = "SELECT * FROM komentar WHERE id_barang = '{$id_barang}' ";
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
	
	public function belum(){
		global $db;
		$sql = "SELECT * FROM komentar WHERE status = 0 ORDER BY id_komentar DESC";
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
	
	public function get_edit($id_komentar){
		global $db;
		$sql = "SELECT * FROM komentar WHERE id_komentar = '{$id_komentar}' ";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$row = $res->fetch_array();
			return $row;
		}

	}
	
	public function update($id_komentar, $username, $isi, $id_barang, $alamat){
		global $db;
		
		$folder = '../../assets/img/';
		$nama_file = $folder.date('YmdHis').basename($_FILES['gambar']['name']);
		$ok = 1;
		
		if($ok == 0){
			echo 'gagal';
			$ok = 0;
		}else{
			if(move_uploaded_file($_FILES['gambar']['tmp_name'], $nama_file)){
				header('Location: ../../komentar.php');
				$ok = 1;
			}
		}
		
		$sql = "UPDATE komentar SET username = '$username', isi = '$isi', id_barang = '$id_barang', alamat = '$alamat', status = '$status', gambar = '".$nama_file."'  WHERE id_komentar = '{$id_komentar}'  ";
		$res = $db->query($sql);
	}
	
	public function delete($id_komentar){
		global $db;
		$sql = "DELETE FROM komentar WHERE id_komentar = '{$id_komentar}' ";
		$res = $db->query($sql);
	}
	
	public function register($id_komentar){
		global $db;
		
		$sql = "UPDATE komentar SET status = 1 WHERE id_komentar = '{$id_komentar}'  ";
		$res = $db->query($sql);
	}
}


?>