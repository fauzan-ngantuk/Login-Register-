<?php 
session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql=mysql_query("select * from tabelfauzan where username='$username' and password='$password'");
$data=mysql_fetch_object($sql);
if ($data) { 
	# code...
	$_SESSION['username']=$username;
	if ($data->akses=='pengguna') {
		# code...
		echo "<script> 
			alert('Selamat anda berhasil login');
			window.location.assign('user.php');
			</script>";
	}
	elseif ($data->akses=='admin') {
		# code...
		echo "<script> 
			alert('Selamat anda berhasil login');
			window.location.assign('admin.php');
			</script>";
	}			
	?> 
	<?php
}
else{
	?>
	<?php
	echo "<script>
		alert('Anda belum terdaftar');
		window.location.assign('register.html');
	</script>";
}?>