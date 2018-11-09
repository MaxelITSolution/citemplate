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
	<h1>Master Tempat - Add new data</h1>
	<?php echo form_open_multipart('backend/tempatPost');?>
	<table width="700px" class="basic">
		<tr valign="top">
			<td><label>Gambar Banner</label></td>
			<td>:</td>
			<td>
				<input type="file" name="barang_banner">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Gambar Cover</label></td>
			<td>:</td>
			<td>
				<input type="file" name="barang_cover">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Siteplan</label></td>
			<td>:</td>
			<td>
				<input type="file" name="barang_siteplan">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Nama</label></td>
			<td>:</td>
			<td>
				<input name="barang_nama" class="form-control" value="" required>				
			</td>
		</tr>
		<tr valign="top">
			<td><label>Kategori</label></td>
			<td>:</td>
			<td>
				<select class="form-control" name="kbarang_id">
					<?php foreach ($list_kategori as $kat) { ?>
						<option value="<?php echo $kat->kbarang_id; ?>">
							<?php echo $kat->kbarang_nama; ?>
						</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr valign="top">
			<td><label>Type</label></td>
			<td>:</td>
			<td>
				<select class="form-control" name="tbarang_id">
					<?php foreach ($list_type as $type) { ?>
						<option value="<?php echo $type->tbarang_id; ?>">
							<?php echo $type->tbarang_nama; ?>
						</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr valign="top">
			<td><label>Lokasi</label></td>
			<td>:</td>
			<td>
				<select class="form-control" name="lokasi_id">
					<?php foreach ($list_lokasi as $row) { ?>
						<option value="<?php echo $row->lokasi_id; ?>">
							<?php echo $row->lokasi_nama; ?>
						</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr valign="top">
			<td><label>Ukuran</label></td>
			<td>:</td>
			<td>
				<input name="barang_size" class="form-control" value="0" type="number" style="width:100px; display: inline;" required>
				<select name="barang_satuan" class="form-control" style="width:100px; display: inline;" >
					<option value="m2" selected>m2</option>
					<option value="ha">ha</option>
				</select>				
			</td>
		</tr>
		<tr valign="top">
			<td><label>Link Website</label></td>
			<td>:</td>
			<td>
				<input name="barang_website" class="form-control" value="">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Keterangan Singkat</label></td>
			<td>:</td>
			<td>
				<textarea name="barang_keterangan_pendek" class="form-control"></textarea>
			</td>
		</tr>
		<tr valign="top">
			<td><label>Keterangan</label></td>
			<td>:</td>
			<td>
				<textarea name="barang_keterangan" class="form-control"></textarea>
			</td>
		</tr>
		<tr valign="top">
			<td><label>Highlight</label></td>
			<td>:</td>
			<td>
				<input type="checkbox" name="barang_highlight" value="1">				
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
				<input type="text" id="barang_lat" name="barang_lat" value="-7.250445" class="form-control" onchange="set_marker_pos();">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Lokasi - Lng</label></td>
			<td>:</td>
			<td>
				<input type="text" id="barang_lng" name="barang_lng" value="112.768845" class="form-control" onchange="set_marker_pos();">
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
		$("#barang_lat").val(e.latLng.lat());
		$("#barang_lng").val(e.latLng.lng());
	});
  }
  function set_marker_pos() {
  	latlng = new google.maps.LatLng($("#barang_lat").val(),$("#barang_lng").val());
  	marker.setPosition(latlng);
  	map.setCenter(latlng);
  }
</script>
<?php $part["script"] .= ob_get_flush(); ob_clean(); ?>



<?php $this->load->view("_layouts/backend/index",$part); ?>