<?php
include "koneksi.php";
$nama=$_POST['nama'];
$hobi=$_POST['hobi'];
$umur=$_POST['umur'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
$jeniskelamin=$_POST['jeniskelamin'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$akses=$_POST['akses'];
$query=mysql_query("insert into tabelfauzan (nama,hobi,umur,alamat,agama,jeniskelamin,email,username,password,akses) 
	values('$nama','$hobi','$agama','$umur','$alamat','$jeniskelamin','$email','$username',md5('$password'),'$akses')");
if ($query) {
	# code...
	echo "<script>
		alert('Berhasil menambahkan data');
		window.location.assign('login.html');
	</script>";
}
echo mysql_error();
?>