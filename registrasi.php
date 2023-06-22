<!DOCTYPE html>
<html>
<head>
	<title>E-PERPUSTAKAAN | Registrasi</title>
	<style type="text/css">
		body {
			background-color: #f0f0f0;
			font-family: Arial, sans-serif;
			background-image: url(bg.jpg);
			background-size: cover;
		}

		.container {
			margin-top: 120px;
			/* border: 1px solid yellow; */
		}

		h1 {
			color: #fff;
			font-size: 36px;
			text-align: center;
		}

		form {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			margin: 20px auto;
			max-width: 600px;
			padding: 20px;
			background-color: rgba(0, 0, 0, 0.1);
		}

		label {
			color: #fff;
			display: block;
			font-size: 18px;
			margin-bottom: 10px;
		}

		input[type="text"],
		input[type="password"],
		input[type="email"] {
			border-radius: 3px;
			border: none;
			box-shadow: inset 0 -2px 1px rgba(0, 0, 0, 0.1);
			display: block;
			font-size: 18px;
			margin-bottom: 20px;
			padding: 10px;
			width:96%;
			outline: none
		}

		button {
			background-color: tomato;
			border-radius: 3px;
			border: none;
			color: #fff;
			cursor: pointer;
			display: block;
			font-size: 18px;
			margin-top: 20px;
			padding: 10px;
			width: 100%;
			color: #fff;
		}

		.form-input a, span {
			color: #fff;
			text-decoration: none;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1>Halaman Registrasi</h1>
	<form action="" method="POST">
		<input type="email" name="email" placeholder="Email">
		<input type="text" name="nama" placeholder="Username">
		<input type="password" name = "Password"placeholder="Masukkan Password">
		<input type="password" name="Konfirmasi"placeholder="Konfirmasi ulang Password">
		<input type="text" name= "nomor"placeholder="Masukkan Nomor">
		<button type="submit" name="Registrasi">
		Registrasi
		</button>
		<ul>
			<li><a href="index.php">Sudah Login?</a></li>
		</ul>
	</form>
	</div>
		

	</form>
</body>

</html>