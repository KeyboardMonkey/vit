
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Vitorials</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/styles/main.css" />
		  <script src="<?= base_url();?>assets/js/jquery-1.4.1.min.js"></script>
	</head>
<body>

	<header>
		<section class="logo">
            <a href="<?=base_url();?>"><img src="<?=base_url();?>assets/graphics/logo.png" width="200px" height="39px" /></a>
		</section>

		<section id="login">
			<form class="login" method="post" action="<?=base_url();?>index.php/register/login">
				<input type="text" name="login" placeholder="Email" />
				<input type="password" name="password" placeholder="Password" />
				<input type="submit" name="submit" value="Login" />
			</form>
			<section id="verify">
				<input id="login-checkbox" type="checkbox"  value="1" name="remember"></input>
				<label for="login-checkbox">Remember Me</label>
				<a href="">Forgot Password?</a>
			</section>
		</section>

	
	</header>
