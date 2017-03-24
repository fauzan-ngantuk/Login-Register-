<?php
include "koneksi.php";
$id=$_GET['id'];
$query=mysql_query("delete from tabelfauzan where id=".$id);
echo "<script>
		alert('Berhasil menghapus data');
		window.location.assign('admin.php');
	</script>";
?>