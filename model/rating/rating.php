<?php

class Rating{
	public function create($id_barang, $username, $jml_rating){
		global $db;
		
		$sql = "INSERT INTO rating SET id_barang = '$id_barang', username = '$username', jml_rating = '$jml_rating' ";
		$res = $db->query($sql);
	}
	
	public function read(){
		global $db;
		$sql = "SELECT * FROM rating ORDER BY id_rating DESC";
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
		$sql = "SELECT * FROM rating WHERE status = 0 ORDER BY id_rating DESC";
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
	
	public function get_edit($id_rating){
		global $db;
		$sql = "SELECT * FROM rating WHERE id_rating = '{$id_rating}' ";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$row = $res->fetch_array();
			return $row;
		}

	}
	
	public function update($id_rating, $id_barang, $username, $jml_rating, $alamat){
		global $db;
		
		$folder = '../../assets/img/';
		$nama_file = $folder.date('YmdHis').basename($_FILES['gambar']['name']);
		$ok = 1;
		
		if($ok == 0){
			echo 'gagal';
			$ok = 0;
		}else{
			if(move_uploaded_file($_FILES['gambar']['tmp_name'], $nama_file)){
				header('Location: ../../rating.php');
				$ok = 1;
			}
		}
		
		$sql = "UPDATE rating SET id_barang = '$id_barang', username = '$username', jml_rating = '$jml_rating', alamat = '$alamat', status = '$status', gambar = '".$nama_file."'  WHERE id_rating = '{$id_rating}'  ";
		$res = $db->query($sql);
	}
	
	public function delete($id_rating){
		global $db;
		$sql = "DELETE FROM rating WHERE id_rating = '{$id_rating}' ";
		$res = $db->query($sql);
	}
	
	public function register($id_rating){
		global $db;
		
		$sql = "UPDATE rating SET status = 1 WHERE id_rating = '{$id_rating}'  ";
		$res = $db->query($sql);
	}
	
	public function hasil($id_barang){
		global $db;
		$sql = "SELECT sum(jml_rating) / Count(id) as hasil from rating WHERE id_barang = '$id_barang'  ";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$row = $res->fetch_array();
			return $row;
		}

	}
	
	public function tombol($id_barang, $username){
		global $db;
		$sql = "SELECT COUNT(username) as tombol from rating where id_barang = '$id_barang' AND username = '$username'  ";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$row = $res->fetch_array();
			return $row;
		}

	}
	
	
}


