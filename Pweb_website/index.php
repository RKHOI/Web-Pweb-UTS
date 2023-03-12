<!DOCTYPE html>
<html>

<head>
	<title>Buildedin</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<link rel="shortcut icon" href="logo.jpg">

<body>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form action="User.php" method="post">
				<label for="chk" aria-hidden="true">Sign up</label>
				<input type="text" name="username" placeholder="User name" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<input type="" name="Role" placeholder="Role" required="">
				<button type="submit" class="tombol_register" value="register" name="aksi">Sign Up</button>
			</form>
		</div>

		<div class="login">
			<form action="User.php" method="post">
				<label for="chk" aria-hidden="true">Login</label>
				<input type="text" name="username" placeholder="User name" required="">
				<input type="password" name="password" placeholder="Password" required="">
				<button type="submit" class="tombol_login" value="login" name="aksi">LOGIN</button>
			</form>
		</div>
	</div>
</body>

</html>