<?php

class Anggota{
	public function create($username, $password, $no_tlp, $alamat){
		global $db;
		$status = 0;
		$folder = '../../assets/img/';
		$nama_file = $folder.date('YmdHis').basename($_FILES['gambar']['name']);
		$ok = 1;
		
		if($ok == 0){
			echo 'gagal';
			$ok = 0;
		}else{
			if(move_uploaded_file($_FILES['gambar']['tmp_name'], $nama_file)){
				header('Location: ../../anggota.php');
				$ok = 1;
			}
		}
		
		$sql = "INSERT INTO anggota SET username = '$username', password = '$password', no_tlp = '$no_tlp', alamat = '$alamat', status = '$status', gambar = '".$nama_file."' ";
		$res = $db->query($sql);
	}
	
	public function read(){
		global $db;
		$sql = "SELECT * FROM anggota WHERE status = 1 ORDER BY id_anggota DESC";
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
		$sql = "SELECT * FROM anggota WHERE status = 0 ORDER BY id_anggota DESC";
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
	
	public function get_edit($id_anggota){
		global $db;
		$sql = "SELECT * FROM anggota WHERE id_anggota = '{$id_anggota}' ";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$row = $res->fetch_array();
			return $row;
		}

	}
	
	public function update($id_anggota, $username, $password, $no_tlp, $alamat){
		global $db;
		
		$folder = '../../assets/img/';
		$nama_file = $folder.date('YmdHis').basename($_FILES['gambar']['name']);
		$ok = 1;
		
		if($ok == 0){
			echo 'gagal';
			$ok = 0;
		}else{
			if(move_uploaded_file($_FILES['gambar']['tmp_name'], $nama_file)){
				header('Location: ../../anggota.php');
				$ok = 1;
			}
		}
		
		$sql = "UPDATE anggota SET username = '$username', password = '$password', no_tlp = '$no_tlp', alamat = '$alamat', status = '$status', gambar = '".$nama_file."'  WHERE id_anggota = '{$id_anggota}'  ";
		$res = $db->query($sql);
	}
	
	public function delete($id_anggota){
		global $db;
		$sql = "DELETE FROM anggota WHERE id_anggota = '{$id_anggota}' ";
		$res = $db->query($sql);
	}
	
	public function register($id_anggota){
		global $db;
		
		$sql = "UPDATE anggota SET status = 1 WHERE id_anggota = '{$id_anggota}'  ";
		$res = $db->query($sql);
	}
	
	public function notif(){
		global $db;
		$sql = "select count(id_anggota) as notif from anggota where status = 0;";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$row = $res->fetch_array();
			return $row;
		}

	}
	
	
}


?>