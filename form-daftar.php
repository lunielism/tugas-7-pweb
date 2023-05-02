<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		h3 {
			margin: 0;
		}
		form {
			background-color: #fff;
			border: 1px solid #ccc;
			padding: 20px;
			margin: 20px auto;
			max-width: 500px;
		}
		fieldset {
			border: none;
			padding: 0;
			margin: 0;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}
		input[type="text"],
		select,
		textarea {
			border: 1px solid #ccc;
			padding: 5px;
			width: 100%;
			box-sizing: border-box;
			border-radius: 5px;
			margin-bottom: 10px;
			font-size: 16px;
		}
		input[type="radio"] {
			display: inline-block;
			margin-right: 10px;
		}
		input[type="submit"] {
			background-color: #333;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 10px;
		}
		input[type="submit"]:hover {
			background-color: #555;
		}
	</style>
</head>

<body>
	<header>
		<h3>Formulir Pendaftaran Siswa Baru</h3>
	</header>
	
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
		</p>
		<p>
			<label for="agama">Agama: </label>
			<select name="agama">
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				<option>Atheis</option>
			</select>
		</p>
		<p>
			<label for="sekolah_asal">Sekolah Asal: </label>
			<input type="text" name="sekolah_asal" placeholder="nama sekolah" />
</p>
<p>
<input type="submit" value="Daftar" name="daftar" />
</p>
</fieldset>

</form>
</body>
</html>






