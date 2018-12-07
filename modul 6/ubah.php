<html>
<head>
	<title>Mengubah mahasiswa</title>
<head>
<?php
$koneksi=mysql_connect('localhost', 'root', '');
$db=mysql_select_db('informatika');
?>
<table border='0' width='30%'>
<form method='POST' action='form.php'>
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
if(isset($_POST['simpan']){
	$gnim = $_GET['nim'];
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$alamat=$_POST['alamat'];
	
	if($_GET['nim']!=""){
		$sql=mysql_query("UPDATE mahasiswa aset nama='$nama', kelas='$kelas', alamat='$alamat')")or die(mysql_error());