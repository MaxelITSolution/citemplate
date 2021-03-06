<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $part["style"] = "";
  $part["main"] = "";
  $part["script"] = "";
?>


<?php ob_clean(); ob_start(); //style ?>
<?php $part["style"] .= ob_get_flush(); ?>


<?php ob_clean(); ob_start(); //main ?>
<main>		
	<h1>Master Kantor - Add new data</h1>
	<?php echo form_open_multipart('backend/kantorPost');?>
	<table width="700px" class="basic">
		<tr valign="top">
			<td><label>Alamat</label></td>
			<td>:</td>
			<td>
				<input name="kantor_alamat" class="form-control" value="" required>				
			</td>
		</tr>
		<tr valign="top">
			<td><label>Alamat 2</label></td>
			<td>:</td>
			<td>
				<input name="kantor_alamat2" class="form-control" value="" required>				
			</td>
		</tr>
		<tr valign="top">
			<td><label>Telp</label></td>
			<td>:</td>
			<td>
				<input name="kantor_telp" class="form-control" value="" required>				
			</td>
		</tr>
		<tr valign="top">
			<td><label>Fax</label></td>
			<td>:</td>
			<td>
				<input name="kantor_fax" class="form-control" value="" required>				
			</td>
		</tr>
		<tr valign="top">
			<td><label>Email</label></td>
			<td>:</td>
			<td>
				<input name="kantor_email" class="form-control" value="" required>				
			</td>
		</tr>
		<tr valign="top">
			<td><label>Lokasi</label></td>
			<td>:</td>
			<td>
				<div id="map" style="width: 100%; height: 200px;">
				</div>
			</td>
		</tr>		
		<tr valign="top">
			<td><label>Lokasi - Lat</label></td>
			<td>:</td>
			<td>
				<input type="text" id="kantor_lat" name="kantor_lat" value="-7.250445" class="form-control" onchange="set_marker_pos();">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Lokasi - Lng</label></td>
			<td>:</td>
			<td>
				<input type="text" id="kantor_lng" name="kantor_lng" value="112.768845" class="form-control" onchange="set_marker_pos();">
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<button type="submit" class="btn btn-success btn-lg" name="btn_insert" onclick="return confirm('Are you sure want to add this data?')">
					<i class="fa fa-check"></i>
					Insert
				</button>
			</td>
		</tr>
	</table>
	</form>
</main>
<?php $part["main"] .= ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //script ?>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPRo01l7uGPlz3xGj1ttaQsJ8xw_WHjF8&callback=initMap">
</script>
<script>
	var sby = {lat: -7.250445, lng: 112.768845};
	var map;
	var marker;
  function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 14,
	  center: sby
	});
    marker = new google.maps.Marker({
      position: sby,
      map: map
    });
	map.addListener('click', function(e) {
		marker.setPosition(e.latLng);
		map.setCenter(e.latLng);
		$("#kantor_lat").val(e.latLng.lat());
		$("#kantor_lng").val(e.latLng.lng());
	});
  }
  function set_marker_pos() {
  	latlng = new google.maps.LatLng($("#kantor_lat").val(),$("#kantor_lng").val());
  	marker.setPosition(latlng);
  	map.setCenter(latlng);
  }
</script>
<?php $part["script"] .= ob_get_flush(); ob_clean(); ?>



<?php $this->load->view("_layouts/backend/index",$part); ?>