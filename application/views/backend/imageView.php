<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $part["style"] = "";
  $part["main"] = "";
  $part["script"] = "";
?>


<?php ob_clean(); ob_start(); //style ?>
<?php $part["style"] .= ob_get_flush(); ?>


<?php ob_clean(); ob_start(); //main ?>
<?php 
	$banner["landing"] = "Home";
	$banner["about"] = "About";
	$banner["browse"] = "For Sale / Lease";
	$banner["contact"] = "Contact";
	$banner["article"] = "Article";
	$banner["detail"] = "Detail";
	$banner["portfolio"] = "Portfolio";
	$banner["portfolio-1"] = "Portfolio Header - 1";
	$banner["portfolio-2"] = "Portfolio Header - 2";
	$banner["portfolio-3"] = "Portfolio Header - 3";
	$banner["portfolio-4"] = "Portfolio Header - 4";
	$banner["portfolio-5"] = "Portfolio Header - 5";

	$image["logo"] = "Logo";
	$image["home_bar"] = "Home - Bar";
	$image["about_right"] = "About - Right";
?>

<main>
	<?php if ($this->session->flashdata("status")) { ?>
		<?php if ($this->session->flashdata("status") == 1) { ?>
			<div class="alert alert-success">Upload Berhasil</div>
		<?php } else { ?>
			<div class="alert alert-danger">Upload Gagal</div>
		<?php } ?>
	<?php } ?>

	<?php foreach($banner as $key=>$value) { ?>
	<div>
		<h3>Banner <?php echo $value; ?></h3>
		<?php if (file_exists('./public/img/banner/banner_'.$key.'.jpg')) { ?>
			<div class="backend_banner" style="background-image:url('<?php echo base_url('public/img/banner/banner_'.$key.'.jpg?'.rand(1,999)); ?>')">
			</div>
		<?php } ?>
		<?php echo form_open_multipart('backend/bannerPost');?>
			<input type="hidden" name="banner_key" value="<?php echo $key; ?>">
			<input type=file name="banner_img">
			<button class="btn btn-success" type="submit">Upload</button>
		</form>
	</div>
	<hr style="border-color: black">
	<?php } ?>


	<?php foreach($image as $key=>$value) { ?>
	<div>
		<h3>Image <?php echo $value; ?></h3>
		<?php if (file_exists('./public/img/'.$key.'.png')) { ?>
			<img style="max-width: 500px;" src="<?php echo base_url('public/img/'.$key.'.png?'.rand(1,999)); ?>">
		<?php } ?>
		<?php echo form_open_multipart('backend/imagePost');?>
			<input type="hidden" name="img_key" value="<?php echo $key; ?>">
			<input type=file name="img_img">
			<button class="btn btn-success" type="submit">Upload</button>
		</form>
	</div>
	<hr style="border-color: black">
	<?php } ?>
</main>
<?php $part["main"] .= ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //script ?>
<script type="text/javascript">
</script>
<?php $part["script"] .= ob_get_flush(); ?>




<?php $this->load->view("_layouts/backend/index",$part); ?>