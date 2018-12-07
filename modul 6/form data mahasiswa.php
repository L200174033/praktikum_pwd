<html>
<head><title>data mahasiswa</title></head>
<?php
$konoksi=mysql_connect('localhost', 'root', '');
$db=mysql_select_db('informatika');
?>
<body>
<center>
<h3>masukan data mahasiswa : </h3>
<table border='0' width='30%'>
<form method='POST' action='form data mahasiswa.php'>
<tr>
<td width='25%'>nim </td>
<td width='5%'>: </td>
<td width='65%'><input type='text' name='nim' size='10'></td>
</tr>
<tr>
<td width='25%'>nama </td>
<td width='5%'>:</td>
<td width='65%'><input type='text' name='nama' size='30'></td>
</tr>
<tr>
<td width='25%'>kelas</td>
<td width='5%'>:</td>
<td width='65%'><input type='radio' value='A' checked name='kelas'>A
<input type='radio' value='B'  name='kelas'>B
<input type='radio' value='C'  name='kelas'>C</td>
</tr>
<tr>
<td width='25%'>alamat </td>
<td width='5%'>:</td>
<td width='65%'><input type='text' name='alamat' size='40'></td>
</tr>
</table>
<input type='submit' value='masukkan' name='submit'>
</form>
<?php
error_reporting(E_ALL^ E_NOTICE);
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$submit = $_POST['submit'];
$input="insert into mahasiswa (nim, nama, kelas, alamat)value ('$nim', '$nama', '$kelas', '$alamat')";
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
<td align='center' width='10%'>keterangan</a></td>
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
	<td width='30%'><a href=ubah data.php>ubah data</a></td> 
	</tr>";
}
?>
</table>
</center>
</body>
</html>