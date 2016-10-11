<?php
//konfigurasi
$hostDB		= "localhost";
$usernameDB = "root";
$passwordDB = "";
$namaDB		= "smkn_glagah";

//koneksi ke database
$con = mysqli_connect($hostDB,$usernameDB,$passwordDB,$namaDB);

//cek koneksi
if(mysqli_connect_errno())
{
	echo "KONEKSI GAGAL";
	die;
}

//akses database
include("models/database.php");

//MEMANGGIL DATABASE
$database = new database;

//akses controllers
include("controllers/controllers.php");

?>