<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Login Siswa </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('tampilan/css/style.css')}}">
</head>
<body>
	<div class="box">
		<h2>Login Siswa</h2>
		<form action="{{ route('siswa.login.input') }}" method="post">
            {{ csrf_field() }}
			<div class="input-box">
				<input type="text" name="nisn" required>
				<label>Nisn</label>
			</div>
			<div class="input-box">
				<input type="password" name="password" required>
				<label>Password</label>
			</div>
			<input type="submit" name="" value="Login">
		</form>
	</div>
</body>
</html>