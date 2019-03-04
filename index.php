<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OrangeSoftWeb-SAS</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/main-style.css">
</head>

<body>
	<div class="container text-center">
	<!--<h1>OrangeSoft</h1>-->
		<form class="form-signin">
			<img class="mb-4" src="img/logo.ico" alt="" width="100" height="100" style="width:%;">
			<h3 class="h3 mb-3 font-weight-normal text-center">Please Sign In</h3>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" class="form-control mb-2" placeholder="Email address" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			<div class="checkbox mb-3">
			<label>
			<input type="checkbox" value="remember-me"> Remember me
			</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			<p class="mt-5 mb-3 text-muted">OrangeSoft-Copyright&copy;<?php echo date('Y'); ?></p>
		</form>
	</div>

</body>
</html>
