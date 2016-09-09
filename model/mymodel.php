<?php
class mymodel {
	private $db;
	function __construct(){
		include( 'model/mysql.php');
		$this->db = new mysql;
		$this->db->connect();
	}
	function __destruct(){
		$this->db->disconnect();
	}
	function select($kode_mk = ''){
		$sql = "SELECT * FROM matakuliah";
		if($kode_mk != '') $sql = "SELECT * FROM matakuliah WHERE kode_mk='$kode_mk'";
		return $this->db->results($sql, 'array'); 
	}
	function insert($data){
		return $this->db->query(
			"INSERT INTO matakuliah(kode_mk, nama_mk, sks) VALUES ('".
				$data['kode_mk']."','".
				$data['nama_mk']."','".
				$data['sks']."')"
			);
	}
	function update($data){
		return $this->db->query(
			"UPDATE matakuliah SET nama_mk = '".$data['nama_mk']."', sks = '".$data['sks']."' ".
			" WHERE kode_mk = '".$data['kode_mk']."'"
			);
	}
	function delete($kode_mk){
		return $this->db->query("DELETE FROM matakuliah WHERE kode_mk = '$kode_mk'");
	}
}
?>