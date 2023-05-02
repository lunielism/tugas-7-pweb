<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<style>
	body {
		font-family: Arial, sans-serif;
		margin: 0;
		padding: 0;
		background-color: #f7f7f7;
	}
	
	header {
		background-color: #2F4F4F;
		color: #fff;
		padding: 20px;
		text-align: center;
	}
	
	h1, h3 {
		margin: 0;
	}
	
	nav {
		background-color: #f2f2f2;
		padding: 10px;
		margin-bottom: 20px;
		box-shadow: 0 0 10px rgba(0,0,0,0.2);
	}
	
	nav a {
		color: #2F4F4F;
		text-decoration: none;
		padding: 10px;
		border-radius: 5px;
		transition: all 0.2s ease-in-out;
	}
	
	nav a:hover {
		background-color: #2F4F4F;
		color: #fff;
	}
	
	table {
		border-collapse: collapse;
		margin: 20px;
		width: calc(100% - 40px);
		box-shadow: 0 0 10px rgba(0,0,0,0.2);
	}
	
	th, td {
		border: 1px solid #ddd;
		padding: 10px;
		text-align: center;
	}
	
	th {
		background-color: #2F4F4F;
		color: #fff;
	}
	
	.tindakan a {
		background-color: #2F4F4F;
		color: #fff;
		padding: 5px 10px;
		border-radius: 5px;
		text-decoration: none;
		transition: all 0.2s ease-in-out;
	}
	
	.tindakan a:hover {
		background-color: #fff;
		color: #2F4F4F;
		border: 1px solid #2F4F4F;
	}
	
	.tindakan a + a {
		margin-left: 5px;
	}
	
	.total {
		margin: 20px;
		text-align: center;
	}

	</style>
</head>

<body>
	<header>
		<h1>Pendaftaran Siswa Baru</h1>
		<h3>SMK Coding</h3>
	</header>
	
	<nav>
		<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>
	
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Sekolah Asal</th>
				<th>Tindakan</th>
			</tr>
		</thead>
		<tbody>
			
			<?php
			$sql = "SELECT * FROM calon_siswa";
			$query = mysqli_query($db, $sql);
			$i = 1;
			while ($siswa = mysqli_fetch_array($query)) {
				echo "<tr>";
				echo "<td>" . $i . "</td>";
				echo "<td>" . $siswa['nama'] . "</td>";
				echo "<td>" . $siswa['alamat'] . "</td>";
				echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
				echo "<td>" . $siswa['agama'] . "</td>";
				echo "<td>" . $siswa['sekolah_asal'] . "</td>";
				echo "<td class='tindakan'>";
			
			?>
				<a href='form-edit.php?id=<?php echo $siswa["id"];?>'>Edit</a>
				<a href='hapus.php?id=<?php echo $siswa["id"];?>' onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
			</td>
		</tr>
		
		<?php
			$i++;
		}
		?>
		
	</tbody>
</table>

<div class="total">
	Total : <?php echo mysqli_num_rows($query) ?> siswa
</div>
</body>
</html>
<!-- tambahkan script php untuk menutup koneksi ke database -->
<?php
mysqli_close($db);
?>
