<html>
<head>
	<title>Mengubah mahasiswa</title>
<head>
<?php
$koneksi=mysql_connect('localhost', 'root', '');
$db=mysql_select_db('informatika');
?>
<table border='0' width='30%'>
<form method='POST' action='ubah data.php'>
<tr>
<td width='25%'>NIM</td>
<td width='5%'>:</td>
<td width='65%'><input type='text' name='nim' size='10'></td>
</tr><tr>
<td width='25%'>Nama</td>
<td width='5%'>:</td>
<td width='65%'><input type='text' name='nama' size='30'></td>
</tr><tr>
<td width='25%'>Kelas</td>
<td width='5%'>:</td>
<td width='65%'><input type ='radio' value='a' checked name='kelas'>A
<input type ='radio' value='b' checked name='kelas'>B
<input type ='radio' value='c' checked name='kelas'>C</td>
</tr><tr>
<td width='25%'>Alamat</td>
<td width='5%'>:</td>
<td width='65%'><input type='text' name='alamat' size='40'></td>
</tr>
</table>
<input type='submit' value='Simpan' name='simpan' size='40'>
</form>
<?php

error_reporting(E_ALL^ E_NOTICE);
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$submit = $_POST['submit'];
$input="update into mahasiswa  set (nim, nama, kelas, alamat)value ('$nim', '$nama', '$kelas', '$alamat')";
if ($submit){
	if($nim==''){
		echo"</br> nim tidak boleh kosong, diisi sulu";
	}elseif ($nama==''){
		echo "</br> nama tidak boleh kosong , diisi dulu";
	}elseif($alamat==''){
		echo "</br> alamat tidak boleh kosong, diisi dulu";
	}else{
		mysql_query($input);
		echo'</br> data berhasil dimasukan';
	}
}
?>
<hr>
<h3>data mahasiswa</h3>
<table border='1' width='50%'>
<tr>
<td align='center' width='20%'><b>NIM</b></td>
<td align='center' width='30%'><b>Nama</b></td>
<td align='center' width='10%'><b>Kelas</b></td>
<td align='center' width='30%'><b>Alamat</b></td>
</tr>
<?php
$cari="select *from mahasiswa order by nim";
$hasil_cari=mysql_query($cari);
while($data=mysql_fetch_row($hasil_cari)){
	echo"
	<tr>
	<td width='20%'>$data[0]</td>
	<td width='30%'>$data[1]</td>
	<td width='10%'>$data[2]</td>
	<td width='30%'>$data[3]</td>
	</tr>";
}
?>
</table>
</center>
</body>
</html>
