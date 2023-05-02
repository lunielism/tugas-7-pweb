<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
			margin: 0;
			padding: 0;
		}
		
		/* Header */
		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		h1 {
			margin: 0;
			font-size: 36px;
			line-height: 1.2;
			text-transform: uppercase;
			letter-spacing: 2px;
		}
		h3 {
			margin: 0;
			font-size: 24px;
			line-height: 1.2;
			text-transform: uppercase;
			letter-spacing: 2px;
			color: #ffb300;
		}
		
		/* Navigation */
		nav {
			background-color: #fff;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
			padding: 10px;
			margin-bottom: 20px;
		}
		nav ul {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		nav li {
			margin: 0 10px;
		}
		nav a {
			color: #333;
			text-decoration: none;
			padding: 10px;
			border-radius: 5px;
			transition: background-color 0.2s ease;
			border: 2px solid #333;
		}
		nav a:hover {
			background-color: #333;
			color: #fff;
			border-color: #fff;
		}
		
		/* Main content */
		main {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
			border-radius: 5px;
		}
		h2 {
			margin-top: 0;
			font-size: 28px;
			color: #333;
			text-transform: uppercase;
			letter-spacing: 1px;
		}
		p {
			margin-bottom: 10px;
			font-size: 18px;
			line-height: 1.4;
			color: #555;
			text-align: justify;
		}
	</style>
</head>
<body>
	<header>
		<h1>SMK Coding</h1>
		<h3>Pendaftaran Siswa Baru</h3>
	</header>
	<nav>
		<ul>
			<li><a href="form-daftar.php">Daftar Baru</a></li>
			<li><a href="list-siswa.php">Pendaftar</a></li>
		</ul>
	</nav>
	<main>
		<?php if(isset($_GET['status'])): ?>
			<p>
				<?php if($_GET['status'] == 'sukses'): ?>
					Pendaftaran siswa baru berhasil!
				<?php else: ?>
					Pendaftaran gagal!
				<?php endif; ?>
			</p>
		<?php endif; ?>
		<h2>Selamat datang di SMK Coding</h2>
		<p>SMK Coding adalah sekolah menengah kejuruan yang menyediakan program pendidikan kejuruan di bidang teknologi informasi dan komunikasi. Kami berkomitmen untuk memberikan pendidikan berkualitas yang dapat membantu siswa kami mencapai potensi terbaik mereka.</p>
	</main>
</body>
