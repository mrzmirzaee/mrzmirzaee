<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> <?= SITE_TITLE ?> - login signup</title>
  <link rel="stylesheet" href="<?=site_url('assets/css/auth.css');?>">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="background">
	<div id="panel-box">
		<div class="panel">
			<div class="auth-form on" id="login">
				<div id="form-title">Log In</div>
				<form action="<?= site_url('auth.php/?action=login') ?>" method="POST">
					<input name="email" type="email" required="required" placeholder="E-mail"/>
					<input name="Password" type="password" required="required" placeholder="password"/>
					<button type="Submit">Log In</button>
				</form>
			</div>
			<div class="auth-form" id="signup" >
				<div id="form-title">Register</div>
				<form action="<?= site_url('auth.php/?action=register') ?>" method="POST">
					<input name="name" type="text" required="required" placeholder="Full Name"/>
					<input name="email" type="email" required="required" placeholder="E-mail"/>
					<input name="password" type="password" required="required" placeholder="Password"/>
					<button type="Submit" id="registere">Sign Up</button>
				</form>
			</div>
		</div>
		<div class="panel">
			<div id="switch">Sign Up</div>
			<div id="image-overlay"></div>
			<div id="image-side"></div>
		</div>
	</div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script><script  src="<?=site_url('assets/js/auth.js');?>"></script>

</body>
</html>
