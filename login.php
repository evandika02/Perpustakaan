<!DOCTYPE html>
<html>
<head>
	<title>E-PERPUSTAKAAN | Login</title>
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
		input[type="password"] {
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
			background-color: black;
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
		<h1>Halaman Login</h1>
		<form action="" method="POST">
			<div class="form-input">
				<!-- <label>Username</label> -->
				<input type="text" name="username" placeholder="Username">
				<!-- <label>Password</label> -->
				<input type="password" name="password" placeholder="Password">
				<button type="submit" name="login">
				Log in
				</button>
				<span>Belum punya akun? <a href="registrasi.php">Daftar</a></span>
			</div>
		</form>
	</div>
		

	</form>
</body>

</html>