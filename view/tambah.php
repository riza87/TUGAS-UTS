<html>
<head>
<title>AWP1</title>
</head>
<body>
<form method="POST" action ="http://riza87.esy.es/index.php?c=siakad&m=simpan">
	<p><input type= "text" name="kode_mk" value="<?php echo $kode_mk;?>" <?php echo ($status=='update') ? 'readonly=true' : '';?> /> kode_mk</p>
	<p><input type= "text" name="nama_mk" value="<?php echo $nama_mk;?>" /> nama_mk</p>
	<p><input type= "text" name="sks" value="<?php echo $sks;?>" /> sks</p>
	<p><input type= "text" name="status" value="<?php echo $status;?>" readonly=true /> Status</p>
	<p><input type= "submit" value="Simpan" /></p>		
</form>
<p>
<a href="http://riza87.esy.es/index.php?c=siakad&m=index">Kembali Ke Index</a>
</p>
</body>
</html>