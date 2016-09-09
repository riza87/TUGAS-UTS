<?php
class siakad {
	private $model;
	function __construct(){
		include( 'model/fungsitampil.php');
		include( 'model/mymodel.php');
		$this->model = new mymodel;
	}
	function index(){
		$data = array();
		$data['mahasiswa'] = $this->model->select();
		view('view/matakuliah.php', $data);
	}
	function view_entry(){
		$kode_mk = isset($_GET['kode_mk']) ? $_GET['kode_mk'] : '';
		$status = 'insert';
		$nama_mk = '';
		$sks = '';
		if($kode_mk != '') {
			$table = $this->model->select($kode_mk);
			if(count($table)>0){
				$nama_mk = $table[0]['nama_mk'];
				$sks = $table[0]['sks'];
				$status = 'update';
			}
		}	
		$data = array(
			'kode_mk' => $kode_mk,
			'nama_mk' => $nama_mk,
			'sks' => $sks,
			'status' => $status);
		view('view/tambah.php', $data);
	}
	
	function simpan(){
		if(!$_POST) exit;
		$kode_mk = isset($_POST['kode_mk']) ? $_POST['kode_mk'] : '';
		$nama_mk = isset($_POST['nama_mk']) ? $_POST['nama_mk'] : '';
		$sks = isset($_POST['sks']) ? $_POST['sks'] : '';
		$status = isset($_POST['status']) ? $_POST['status'] : '';
		$data = array(
			'kode_mk' => $kode_mk,
			'nama_mk' => $nama_mk,
			'sks' => $sks
		);
		$result = 0;
		if($status == 'update')
			$result = $this->model->update($data);
		else
			$result = $this->model->insert($data);
		if($result > 0)	{
			echo '<p>Sukses melakukan operasi data untuk nama_mk '.$nama_mk.'</p>';	
			echo '<p><a href="http://localhost/sample_mvc/index.php?c=siakad&m=index">Kembali ke index</a></p>'; 
		}
	}

	function hapus(){
		$kode_mk = isset($_GET['kode_mk']) ? $_GET['kode_mk'] : '';
		if(empty($kode_mk)) exit;
		$result = $this->model->delete($kode_mk);
		if($result > 0)	{
			echo '<p>Sukses menghapus data '.$kode_mk.'</p>';	
			echo '<p><a href="http://localhost/sample_mvc/index.php?c=siakad&m=index">Kembali ke index</a></p>'; 
		}
	}
} //end class
?>