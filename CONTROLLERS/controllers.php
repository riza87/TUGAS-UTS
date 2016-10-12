<?php
//routing
if(!empty($_GET["page"]))
{
	//jika page kosong
}
else
{
	//tampilan awal
	if(!empty($_POST["button"]))
	{
		$nodaftar		= $_POST['nodaftar'];
		$nama			= $_POST['nama'];
		$jk				= $_POST['jk'];
		$tmp   			= $_POST['tmp'];
		$tgl			= $_POST['tgl'];
		$bln			= $_POST['bln'];
		$thn			= $_POST['thn']; 
		$agama			= $_POST['agama'];
		$kewarganegaraan	= $_POST['kewarganegaraan'];
		$alamat			= $_POST['alamat'];
		$notlp			= $_POST['notlp'];
		$jurusan		= $_POST['jurusan'];
		$asalsekolah	= $_POST['asalsekolah'];
		$nilai			= $_POST['nilai'];
		
		$tagl=$_POST['thn'].'-'.$_POST['bln'].'-'.$_POST['tgl'];
		$input = $database -> daftar($con,$nodaftar,$nama,$jk,$tmp,$tagl,$agama,$kewarganegaraan,$alamat,$notlp,$jurusan,$asalsekolah,$nilai);
		
	}
	
	include("views/form.php");
}

?>