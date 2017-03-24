<?php
session_start();
if (isset($_SESSION['username'])) 
	{
		include "koneksi.php";
		$query = "SELECT * FROM tabelfauzan";
		$sql = mysql_query($query, $koneksi);
		$jumlah_baris = mysql_num_rows($sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<link rel="stylesheet" type="text/css" href="assets/custom.css">
<link rel="icon" type="image/png" href="assets/images/icon.png">
	<title>Peace</title>
</head>
<body>
<div class="header">
	<div class="ui right aligned grid">
		<div class="left floated left aligned eight wide column">
			<img src="assets/images/icon.png" class="admin-logo">
		</div>
		<div class="right floated right aligned eight wide column">
			<a href="">Data Sekolah</a>
			<a href="">Data Sekolah</a>
			<a href="logout.php">
				<i class="sign out icon"></i>Logout
			</a>
		</div>
	</div>
</div>
<div class="main-background">
	<div class="dashboard-content">
		<div class="ui right aligned grid">
		<div class="left floated left aligned eight wide column">
			<div class="welcome-text">
				Selamat datang 
			</div>
		</div>
		<div class="right floated right aligned eight wide column">
		</div>
	</div>
		<div class="bg-list">
			<table class="ui very padded table" style="border: none">
				<thead>
					<tr>
						<th class="center aligned">ID</th>
						<th class="center aligned">Nama Lengkap</th>
						<th class="center aligned">Hobi</th>
						<th class="center aligned">Umur</th>
						<th class="center aligned">Alamat</th>
						<th class="center aligned">Agama</th>
						<th class="center aligned">Jenis Kelamin</th>
						<th class="center aligned">Email</th>
						<th class="center aligned">Username</th>
						<th class="center aligned">Hak Akses</th>
					</tr>
				</thead>
				<tbody>
					<?php if($jumlah_baris==0): ?>
					<tr><td colspan=3>Tidak ada data</td></tr>
					<?php else: ?>
				  	<?php while($dataku = mysql_fetch_object($sql)): ?>
					<tr>
						<td class="center aligned"><?php echo $dataku->id; ?></td>
						<td class="center aligned"><?php echo $dataku->nama; ?></td>
						<td class="center aligned"><?php echo $dataku->hobi; ?></td>
						<td class="center aligned"><?php echo $dataku->umur; ?></td>
						<td class="center aligned"><?php echo $dataku->alamat; ?></td>
						<td class="center aligned"><?php echo $dataku->agama; ?></td>
						<td class="center aligned"><?php echo $dataku->jeniskelamin; ?></td>
						<td class="center aligned"><?php echo $dataku->email; ?></td>
						<td class="center aligned"><?php echo $dataku->username; ?></td>
						<td class="center aligned"><?php echo $dataku->akses; ?></td>
					</tr>
					<?php endwhile;?>
					<?php endif; ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="4">
							<div class="ui left floated">Menampilkan <?php echo $jumlah_baris; ?> data</div>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
 <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>

<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<script type="text/javascript" src="assets/custom.js"></script>
<script type="text/javascript" src="amcharts/amchart.js"></script>
<script>
	$(document).ready(function(){
		activate_sidebar();		
	})
</script>
</body>
</html>
<?php
	}else
		{
			?>Anda tidak boleh mengakses halaman ini!<a href="login.html">Perlu Login</a><?php
		}
?>
<!-- Cek -->
