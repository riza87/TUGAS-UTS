<!DOCTYPE>
<head>
<title>Pendaftaran Siswa</title>
</head>

<body background="IMG/Smkglagah1.jpg">
<form name="form1" method="post" action="">
  <table width="877" border="0" align="center" cellpadding="3" cellspacing="0" >
    <tr>
      <td height="128">&nbsp;</td>
      <td align="center"><img src="IMG/Smkglagah.png" width="119" height="111"></td>
      <td align="center">&nbsp;</td>
      <td align="center"><h3>FORMULIR PENDAFTARAN SISWA BARU <br>
        SMKN 1 GLAGAH BANYUWANGI <br>
      TAHUN PELAJARAN 2016-2017</h3></td>
      <td align="center">&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="right">No Pendaftaran</td>
      <td><p>:</p></td>
      <td><input name="nodaftar" type="text" id="nodaftar" size="15" required></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="right"><i>(di isi panitia)</i></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="46">&nbsp;</td>
      <td width="172"><b>A. Identitas Diri</b></td>
      <td width="3">&nbsp;</td>
      <td width="398">&nbsp;</td>
      <td width="3">&nbsp;</td>
      <td width="131">&nbsp;</td>
      <td width="82">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Nama Lengkap</td>
      <td>:</td>
      <td><input type="text" name="nama" id="nama" required></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Tempat, Tanggal Lahir</td>
      <td>:</td>
      <td><input name="tmp" type="text" id="tmp" size="15" required>
        ,<select name="tgl" id="tgl">
        <option>Tanggal</option>
        <?php
			for ($i=1; $i <= 31; $i++) //berulang dari 1 sampai 31
			{
				if ($i<10) $i='0'.$i; //jika $i kurang dari 10 tambah '0' diawali $i
				if($_POST[tgl]==$i)
				echo "<option value=\"$i\" selected>$i</option>";
				echo "<option value=\"$i\">$i</option>";
			}
			?>
        </select>
        /
        <label for="select2"></label>
        <select name="bln" id="bln">
        <option>Bulan</option>
         <?php
			for ($i=1; $i <= 12; $i++) 
			{
				if ($i<10) $i='0'.$i; 
				if($_POST[bln]==$i)
				echo "<option value=\"$i\" selected>$i</option>";
				else
				echo "<option value=\"$i\">$i</option>";
			}
			?>
        </select>
        /
        <label for="select3"></label>
        <select name="thn" id="select3">
        <option>Tahun</option>
        <?php
						$thnnow=date("Y");
						$thn1=$thnnow-0; //2012
						$thn2=$thnnow-28; //1995
						for ($i=$thn1; $i>$thn2; $i--)
						{
							if ($i<=9) $i="0".$i;
							if($_POST[thn]==$i)
				echo "<option value=\"$i\" selected>$i</option>";
							echo "<option value=$i>$i</option>";
							}
				?>
        </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><input type="radio" name="jk"  value="L" <?php echo "checked=checked"; ?>required/>
      Laki-laki 
      <input type="radio" name="jk"  value="P" required/>
      Perempuan</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Agama</td>
      <td>:</td>
      <td><input type="text" name="agama" id="agama" required></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Kewarganegaraan</td>
      <td>:</td>
      <td><input type="text" name="kewarganegaraan" id="kewarganegaraan" required></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Alamat</td>
      <td>:</td>
      <td><textarea class="message" id="feedback" name="alamat" required></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>No. Telepon</td>
      <td>:</td>
      <td><input type="text" name="notlp" id="notlp" required></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Jurusan</td>
      <td>:</td>
      <td><select name="jurusan" id="jurusan" required>
        <option value="">Pilih jurusan</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
		<option value="Teknik Otomotif">Teknik Otomotif</option>
		<option value="Teknik Mesin">Teknik Mesin</option>
		<option value="Teknik Ketenagalistrikan">Teknik Ketenagalistrikan</option>
		<option value="Teknik Bangunan">Teknik Bangunan</option>
		<option value="Teknik Elektronika">Teknik Elektronika</option>
		<option value="Pelayaran">Pelayaran</option>
		<option value="Agribisnis Produksi Sumberdaya">Agribisnis Produksi Sumberdaya</option>
		<option value="Agribisnis Hasil Pertanian">Agribisnis Hasil Pertanian</option>

      </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><b>B. Keterangan Pendidikan </b></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Tamatan dari Sekolah</td>
      <td>:</td>
      <td><textarea class="message" id="feedback" name="asalsekolah" required></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>Nilai</td>
      <td>:</td>
      <td><input type="text" name="nilai" id="nilai" required></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Simpan"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>


</form>
</body>
</html>