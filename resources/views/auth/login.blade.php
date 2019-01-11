<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Login Admin </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('tampilan/css/style.css')}}">
	<link rel="stylesheet" href=" {{ asset('css/bootstrap.css') }} ">
</head>
<body>
	<div class="box">
		<div class="sekolah"></div>
		<div class="logo"></div>
		<h2>Login Admin</h2>
		<form action="{{ route('login') }}" method="post">
            {{ csrf_field() }}
			<div class="input-box">
				<input type="email" name="email" required value=" {{ old('email') }} ">
				<label>Email</label>
				@if ($errors->has('email'))
					<span class="help-box">
						<p style="color:white"> {{ $errors->first('email') }} </p>
					</span>
				@endif
			</div>
			<div class="input-box">
				<input type="password" name="password" required>
				<label>Password</label>
				@if ($errors->has('email'))
					<span class="help-box">
						<p style="color:white"> {{ $errors->first('password') }} </p>
					</span>
				@endif
			</div>
			<input type="submit" name="" value="Login">
		</form>
	</div>
</body>
</html>
