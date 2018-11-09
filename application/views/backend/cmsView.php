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
	$cms["home-aboutus-title"] = "Home - About us - Judul (Bahasa)";
	$cms["home-aboutus-title_en"] = "Home - About us - Judul (English)";
	$cms["home-aboutus-content"] = "Home - About us - Isi (Bahasa)";
	$cms["home-aboutus-content_en"] = "Home - About us - Isi (English)";

	$cms["about-history-title"] = "About - History - Judul (Bahasa)";
	$cms["about-history-title_en"] = "About - History - Judul (English)";
	$cms["about-history-content"] = "About - History - Isi (Bahasa)";
	$cms["about-history-content_en"] = "About - History - Isi (English)";
	$cms["about-profile-title"] = "About - Profile - Judul (Bahasa)";
	$cms["about-profile-title_en"] = "About - Profile - Judul (English)";
	//$cms["about-profile-content"] = "About - Profile - Isi (Bahasa)";
	//$cms["about-profile-content_en"] = "About - Profile - Isi (English)";

	$cms["about-point1-title"] = "About - Poin 1 - Judul (Bahasa)";
	$cms["about-point1-title_en"] = "About - Poin 1 - Judul (English)";
	$cms["about-point1-content"] = "About - Poin 1 - Isi (Bahasa)";
	$cms["about-point1-content_en"] = "About - Poin 1 - Isi (English)";
	$cms["about-point2-title"] = "About - Poin 2 - Judul (Bahasa)";
	$cms["about-point2-title_en"] = "About - Poin 2 - Judul (English)";
	$cms["about-point2-content"] = "About - Poin 2 - Isi (Bahasa)";
	$cms["about-point2-content_en"] = "About - Poin 2 - Isi (English)";
	$cms["about-point3-title"] = "About - Poin 3 - Judul (Bahasa)";
	$cms["about-point3-title_en"] = "About - Poin 3 - Judul (English)";
	$cms["about-point3-content"] = "About - Poin 3 - Isi (Bahasa)";
	$cms["about-point3-content_en"] = "About - Poin 3 - Isi (English)";

	$cms["about-section1-title"] = "About - Section 1 - Judul (Bahasa)";
	$cms["about-section1-title_en"] = "About - Section 1 - Judul (English)";
	$cms["about-section1-content"] = "About - Section 1 - Isi (Bahasa)";
	$cms["about-section1-content_en"] = "About - Section 1 - Isi (English)";
	$cms["about-section2-title"] = "About - Section 2 - Judul (Bahasa)";
	$cms["about-section2-title_en"] = "About - Section 2 - Judul (English)";
	$cms["about-section2-content"] = "About - Section 2 - Isi (Bahasa)";
	$cms["about-section2-content_en"] = "About - Section 2 - Isi (English)";
	$cms["about-section3-title"] = "About - Section 3 - Judul (Bahasa)";
	$cms["about-section3-title_en"] = "About - Section 3 - Judul (English)";
	$cms["about-section3-content"] = "About - Section 3 - Isi (Bahasa)";
	$cms["about-section3-content_en"] = "About - Section 3 - Isi (English)";

	$cms["content-footer"] = "Konten - Footer";
		
?>
<main>		
	<h1>Content Management</h1>
	<table width="100%" class="cms">
	<?php foreach($cms as $key=>$value) { ?>
		<tr valign="top">
			<td width=200px><?php echo $value; ?></td>
			<td>:</td>
			<td>
				<?php echo form_open("backend/cmsPost"); ?>
					<input type="hidden" name="setting_key" value="<?php echo $key; ?>">
					<textarea type="text" name="setting_value"><?php echo (isset($setting[$key]) ? $setting[$key] : "") ?></textarea>
					<button type="submit" class="btn btn-success">Save</button>
					<br /><br />
				</form>
			</td>
		</tr>

	<?php } ?>
	</table>
</main>
<?php $part["main"] .= ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //script ?>
<?php if ($this->session->flashdata("alert")) { ?>
	<script>
		alert("<?php echo $this->session->flashdata("alert"); ?>");
	</script>
<?php } ?>
<?php $part["script"] .= ob_get_flush(); ob_clean(); ?>



<?php $this->load->view("_layouts/backend/index",$part); ?>