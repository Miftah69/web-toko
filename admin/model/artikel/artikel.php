<?php

class artikel{
	public function create($judul, $isi){
		global $db;
		$tgl = date('d-m-Y');
		$folder = '../../../assets/img/';
		$nama_file = $folder.date('YmdHis').basename($_FILES['gambar']['name']);
		$ok = 1;
		
		if($ok == 0){
			echo 'gagal';
			$ok = 0;
		}else{
			if(move_uploaded_file($_FILES['gambar']['tmp_name'], $nama_file)){
				header('Location: ../../artikel.php');
				$ok = 1;
			}
		}
		
		$sql = "INSERT INTO artikel SET judul = '$judul', isi = '$isi', tgl = '$tgl', gambar = '".$nama_file."' ";
		$res = $db->query($sql);
	}
	
	public function read(){
		global $db;
		$sql = "SELECT * FROM artikel ORDER BY id_artikel DESC";
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
	
	public function get_edit($id_artikel){
		global $db;
		$sql = "SELECT * FROM artikel WHERE id_artikel = '{$id_artikel}' ";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$row = $res->fetch_array();
			return $row;
		}

	}
	
	public function update($id_artikel, $judul, $isi){
		global $db;
		
		$tgl = date('d-m-Y');
		$folder = '../../../assets/img/';
		$nama_file = $folder.date('YmdHis').basename($_FILES['gambar']['name']);
		$ok = 1;
		
		if($ok == 0){
			echo 'gagal';
			$ok = 0;
		}else{
			if(move_uploaded_file($_FILES['gambar']['tmp_name'], $nama_file)){
				header('Location: ../../artikel.php');
				$ok = 1;
			}
		}
		
		$sql = "UPDATE artikel SET judul = '$judul', isi = '$isi', tgl = '$tgl', gambar = '".$nama_file."'  WHERE id_artikel = '{$id_artikel}'  ";
		$res = $db->query($sql);
	}
	
	public function delete($id_artikel){
		global $db;
		$sql = "DELETE FROM artikel WHERE id_artikel = '{$id_artikel}' ";
		$res = $db->query($sql);
	}
	
	public function read_index(){
		global $db;
		$sql = "SELECT * FROM artikel  ORDER BY id_artikel DESC LIMIT 0,2";
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