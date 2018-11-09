<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WARINGIN Warehouse | Backend</title>
	<script src="<?php echo base_url('public/vendor/jquery/jquery-3.1.0.min.js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/basic.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/backend.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/vendor/fontawesome470/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/vendor/bootstrap337/css/bootstrap.min.css'); ?>">
	<script src="<?php echo base_url('public/vendor/bootstrap337/js/bootstrap.min.js'); ?>"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/vendor/datatables/datatables.min.css'); ?>">
	<script src="<?php echo base_url('public/vendor/datatables/datatables.min.js'); ?>"></script>
</head>
<body>
	<section id="leftbar">
		<div class="leftbar_row">
			<img alt="brand" src="<?php echo base_url('public/img/logo_kwi.png'); ?>" width="">
		</div>
		<a href="<?php echo site_url('backend/barang'); ?>">
			<div class="leftbar_menu">
				Master Barang
			</div>
		</a>
		<a href="<?php echo site_url('backend/kategori'); ?>">
			<div class="leftbar_menu">
				Master Kategori Barang
			</div>
		</a>
		<a href="<?php echo site_url('backend/brand'); ?>">
			<div class="leftbar_menu">
				Master Brands
			</div>
		</a>
		<a href="<?php echo site_url('backend/image'); ?>">
			<div class="leftbar_menu">
				Image
			</div>
		</a>
		<a href="<?php echo site_url('backend/cms'); ?>">
			<div class="leftbar_menu">
				Content Management
			</div>
		</a>
		<a href="<?php echo site_url('backend/setting'); ?>"> 
			<div class="leftbar_menu">
				Setting
			</div>
		</a>
		<div class="leftbar_row" style="text-align: center;">
			<a href="logout">
			<button type="button" class="btn btn-danger navbar-btn">
				Logout
				<i class="fa fa-sign-out"></i>
			</button>
			</a>
		</div>
	</section>



<?php echo $main; ?>

<?php if(isset($script)) echo $script; ?>
</body>
</html>
