<?php

class kategori{
	public function create($kategori){
		global $db;
		$sql = "INSERT INTO kategori SET kategori = '$kategori' ";
		$res = $db->query($sql);
	}
	
	public function read(){
		global $db;
		$sql = "SELECT * FROM kategori ORDER BY id_kategori DESC";
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
	
	public function get_edit($id_kategori){
		global $db;
		$sql = "SELECT * FROM kategori WHERE id_kategori = '{$id_kategori}' ";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$row = $res->fetch_array();
			return $row;
		}

	}
	
	public function update($id_kategori, $kategori){
		global $db;
		$sql = "UPDATE kategori SET kategori = '$kategori' WHERE id_kategori = '{$id_kategori}'  ";
		$res = $db->query($sql);
	}
	
	public function delete($id_kategori){
		global $db;
		$sql = "DELETE FROM kategori WHERE id_kategori = '{$id_kategori}' ";
		$res = $db->query($sql);
	}
}


?>