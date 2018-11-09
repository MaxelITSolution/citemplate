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
	$set["moreinfo-phone"] = "Konten - More Info";

	$set["contact-address1"] = "Kontak - Alamat 1";
	$set["contact-address2"] = "Kontak - Alamat 2";
	$set["contact-phone"] = "Kontak - Telepon";
	$set["contact-email"] = "Kontak - Email";

	$set["account-facebook"] = "Link Akun Facebook";
	$set["seo-description"] = "SEO Meta Tag Description (Bahasa)";
	$set["seo-description_en"] = "SEO Meta Tag Description (English)";

?>

<main>		
	<h1>Setting</h1>
	<table width="100%" class="cms">
		<!-- Peta lokasi kantor -->
		<?php foreach($set as $key=>$value) { ?>
			<tr valign="top">
				<td width=200px><?php echo $value; ?></td>
				<td>:</td>
				<td>
					<?php echo form_open("backend/settingPost"); ?>
						<input type="hidden" name="setting_key" value="<?php echo $key; ?>">
						<input type="text" name="setting_value" class="form-control" value="<?php echo (isset($setting[$key]) ? $setting[$key] : "") ?>" />
						<button type="submit" class="btn btn-success">Save</button>
						<br /><br />
					</form>
				</td>
			</tr>
		<?php } ?>
<!--
			<?php $key = "contactus-sender_email"; ?>
			<?php $value = "SMTP Email - Email pengirim"; ?>
			<tr valign="top">
				<td width=200px><?php echo $value; ?></td>
				<td>:</td>
				<td>
					<?php echo form_open("backend/settingPost"); ?>
						<input type="hidden" name="setting_key" value="<?php echo $key; ?>">
						<input type="email" name="setting_value" class="form-control" value="<?php echo (isset($setting[$key]) ? $setting[$key] : "") ?>" />
						<button type="submit" class="btn btn-success">Save</button>
						<br /><br />
					</form>
				</td>
			</tr>
			<?php $key = "contactus-sender_pass"; ?>
			<?php $value = "SMTP Email - Password email pengirim"; ?>
			<tr valign="top">
				<td width=200px><?php echo $value; ?></td>
				<td>:</td>
				<td>
					<?php echo form_open("backend/settingPost"); ?>
						<input type="hidden" name="setting_key" value="<?php echo $key; ?>">
						<input type="password" name="setting_value" class="form-control" value="" />
						<span style="font-size:8pt; font-style: italic;">*Isi untuk mengganti password lama yang tersimpan</span>
						<br>
						<button type="submit" class="btn btn-success">Save</button>
						<br /><br />
					</form>
				</td>
			</tr>
      -->
			<?php $key = "contactus-receiver_email"; ?>
			<?php $value = "Email penerima pesan dari contact form"; ?>
			<tr valign="top">
				<td width=200px><?php echo $value; ?></td>
				<td>:</td>
				<td>
					<?php echo form_open("backend/settingPost"); ?>
						<input type="hidden" name="setting_key" value="<?php echo $key; ?>">
						<input type="email" name="setting_value" class="form-control" value="<?php echo (isset($setting[$key]) ? $setting[$key] : "") ?>" />
						<button type="submit" class="btn btn-success">Save</button>
						<br /><br />
					</form>
				</td>
			</tr>


	</table>
</main>
<?php $part["main"] .= ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //script ?>
<?php if ($this->session->flashdata("alert")) { ?>
	<script>
		alert("<?php echo $this->session->flashdata("alert"); ?>");
	</script>
<?php } ?>

	<script>
		function initMap() {
			var office = {lat: <?php echo $setting["contact-office_lat"]; ?>, lng: <?php echo $setting["contact-office_lng"]; ?>};
			var map = new google.maps.Map(document.getElementById('map'), {
			  zoom: 14,
			  center: office
			});
			var marker = new google.maps.Marker({
			  map: map,
			  position: office,
			});
			map.addListener('click', function(e) {
				marker.setPosition(e.latLng);
				map.setCenter(e.latLng);
				$("#contact-office_lat").val(e.latLng.lat());
				$("#contact-office_lng").val(e.latLng.lng());
			});
		}
	</script>
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPRo01l7uGPlz3xGj1ttaQsJ8xw_WHjF8&callback=initMap">
	</script>

<?php $part["script"] .= ob_get_flush(); ob_clean(); ?>



<?php $this->load->view("_layouts/backend/index",$part); ?>