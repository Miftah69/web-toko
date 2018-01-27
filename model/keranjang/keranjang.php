<?php

class Keranjang{
	public function create($jml, $tgl, $username, $nama_barang, $id_barang){
		global $db;
		$status = 0;
		
		$sql = "INSERT INTO keranjang SET jml = '$jml', tgl = '$tgl', username = '$username', nama_barang = '$nama_barang', id_barang = '$id_barang', status = '$status' ";
		$res = $db->query($sql);
	}
	
	public function read(){
		global $db;
		$sql = "SELECT * FROM keranjang  WHERE status = 0 ORDER BY id_keranjang DESC";
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
	
	public function get_edit($id_keranjang){
		global $db;
		$sql = "SELECT * FROM keranjang WHERE id_keranjang = '{$id_keranjang}' ";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$row = $res->fetch_array();
			return $row;
		}

	}
	
	public function update($id_keranjang, $jml){
		global $db;
		
		$sql = "UPDATE keranjang SET jml = '$jml' WHERE id_keranjang = '{$id_keranjang}'  ";
		$res = $db->query($sql);
	}
	
	public function delete($id_keranjang){
		global $db;
		$sql = "DELETE FROM keranjang WHERE id_keranjang = '{$id_keranjang}' ";
		$res = $db->query($sql);
	}
	
	public function selesai($id_keranjang){
		global $db;
		
		$sql = "UPDATE keranjang SET status = '1' WHERE id_keranjang = '{$id_keranjang}'  ";
		$res = $db->query($sql);
	}
	
	public function reads(){
		global $db;
		$sql = "SELECT * FROM keranjang  WHERE status = 1 ORDER BY id_keranjang DESC";
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
	
	public function keranjang_admin(){
		global $db;
		$sql = "SELECT B.id_barang,A.id_keranjang,B.nama_barang, A.jml, A.tgl,A.username , (A.jml * B.harga) as tot FROM keranjang A
inner join barang B
on
A.id_barang = B.id_barang AND status =1 ORDER BY id_keranjang DESC";
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
	
	public function sudah_dikirim(){
		global $db;
		$sql = "SELECT B.id_barang,A.id_keranjang,B.nama_barang, A.jml, A.tgl,A.username , (A.jml * B.harga) as tot FROM keranjang A
inner join barang B
on
A.id_barang = B.id_barang AND status =2 ORDER BY id_keranjang DESC";
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
	
	public function transaksi($id_barang,$username,$status, $total, $nama_barang, $jml){
		global $db;
		$status = 1;
		
		$sql = "INSERT INTO transaksi SET id_barang = '$id_barang', username = '$username', status = '$status', total = '$total', nama_barang = '$nama_barang', jml = '$jml' ";
		$res = $db->query($sql);
	}
	
	public function ubah_keranjang($id_keranjang){
		global $db;
		
		$sql = "UPDATE keranjang SET status = '2' WHERE id_keranjang = '{$id_keranjang}'  ";
		$res = $db->query($sql);
	}
	
	public function stok($id_barang , $jml){
		global $db;
		
		$sql = "UPDATE barang SET stok = stok - '$jml' WHERE id_barang = '{$id_barang}'  ";
		$res = $db->query($sql);
	}
	
	public function banyak_keranjang($username){
		global $db;
		$sql = "SELECT COUNT(username) as banyak from keranjang where status = 0 ";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$row = $res->fetch_array();
			return $row;
		}

	}
	
	public function notif(){
		global $db;
		$sql = "select count(id_keranjang) as notif from keranjang where status = 1  ";
		$res = $db->query($sql);
		if($res->num_rows > 0){
			$row = $res->fetch_array();
			return $row;
		}

	}
	
	
}


?>