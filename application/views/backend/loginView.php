<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WARINGIN Warehouse</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/basic.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/login.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/vendor/fontawesome470/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/vendor/bootstrap337/css/bootstrap.min.css'); ?>">
	<script src="<?php echo base_url('public/vendor/bootstrap337/js/bootstrap.min.js'); ?>"></script>
	<style>
		main {
			text-align: center;
			padding: 50px 0px;
		}
		form {
			width: 300px;
			margin: auto;
		}
		.highlight {
			padding: 10px; 
			background-color: #0972B8; 
			color: white; 
			border-top: solid 2px black;
			border-bottom: solid 2px black;
			text-align: center;
			margin: 50px auto;
		}

	</style>

</head>
<body>
	<main>
			<a href="./">
			<img src="<?php echo base_url('public/img/logo.png'); ?>" style="width:200px;">
			</a>
			<div class="highlight">
				<h2 style="font-family:Montserrat-Bold;">BACKEND SITE</h2>
			</div>
			<form method="POST" action="<?php echo site_url('login/auth'); ?>" style="margin-top: 50px;">
				<div class="input-group">
					<span class="input-group-addon">
						<i class="fa fa-user"></i>
					</span>
					<input type="text" class="form-control" placeholder="Username" name="wrg_username" required>
				</div>
				<div class="input-group">
					<span class="input-group-addon">
						<i class="fa fa-lock"></i>
					</span>
					<input type="password" class="form-control" placeholder="Password" name="wrg_password" required>
				</div>
				<div>
					<button class="btn btn-success btn-block">
						Login
						<i class="fa fa-sign-in"></i>
					</button>
				</div>
			</form>
		</div>
	</main>
</body>
</html>