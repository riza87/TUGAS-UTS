<html>
<head>
<title>AWP1</title>
</head>
<body>
<table border="1">
	<tr>
		<th>Kode</th>
		<th>Nama</th>
		<th>sks</th>
		<th colspan="2"> * </th>
	</tr>
	<?php
	foreach($mahasiswa as $mhs) 
	{
	?>
	<tr>
		<td><?php echo $mhs['kode_mk'];?></td>
		<td><?php echo $mhs['nama_mk'];?></td>
		<td><?php echo $mhs['sks'];?></td>
		<td><a href="http://riza87.esy.es/index.php?c=siakad&m=view_entry&kode_mk=<?php echo $mhs['kode_mk'];?>">Edit</a></td>
		<td><a href="http://riza87.esy.es/index.php?c=siakad&m=hapus&kode_mk=<?php echo $mhs['kode_mk'];?>" onclick="return confirm('Anda yakin akan menghapus data ini?');">Hapus</a></td>
	</tr>
	<?php
	} //akhir loooping foreach
	?>		
</table>
<p>
<a href="http://riza87.esy.es/index.php?c=siakad&m=view_entry"><input type="button" value ="Tambah Data"/></a>
</p>
</body>
</html>