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
	<h1>Master Tempat - Detail</h1>
	<?php echo form_open_multipart('backend/tempatPost');?>
	<table width="700px" class="basic" cellpadding="5">
		<tr valign="top">
			<td><label>ID</label></td>
			<td>:</td>
			<td>
				<?php echo $item->barang_id; ?>
				<input name="barang_id" class="form-control" value="<?php echo $item->barang_id; ?>" type="hidden">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Galeri</label></td>
			<td>:</td>
			<td>
				<a href="<?php echo base_url('backend/tempatpic/'.$item->barang_id); ?>">Atur gambar</a>
			</td>
		</tr>
		<tr valign="top">
			<td><label>Gambar Banner</label></td>
			<td>:</td>
			<td>
				<?php if (file_exists('public/img/barang/'.$item->barang_id.'/'.$item->barang_id.'_banner.jpg')) { ?>
					<div class="product_img" style="background-image: url('<?php echo base_url('public/img/barang/'.$item->barang_id.'/'.$item->barang_id.'_banner.jpg?'.rand(1,999)); ?>')" onclick="window.open('<?php echo base_url('public/img/barang/'.$item->barang_id.'/'.$item->barang_id.'_banner.jpg?'.rand(1,999)); ?>');">
					</div>
					<input type="checkbox" name="barang_banner_delete" /> Delete Banner Image
				<?php } ?>
				<input type="file" name="barang_banner">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Gambar Cover</label></td>
			<td>:</td>
			<td>
				<?php if (file_exists('public/img/barang/'.$item->barang_id.'/'.$item->barang_id.'_cover.jpg')) { ?>
					<div class="product_img" style="background-image: url('<?php echo base_url('public/img/barang/'.$item->barang_id.'/'.$item->barang_id.'_cover.jpg?'.rand(1,999)); ?>')" onclick="window.open('<?php echo base_url('public/img/barang/'.$item->barang_id.'/'.$item->barang_id.'_cover.jpg?'.rand(1,999)); ?>');">
					</div>
					<input type="checkbox" name="barang_cover_delete" /> Delete Cover Image
				<?php } ?>
				<input type="file" name="barang_cover">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Siteplan</label></td>
			<td>:</td>
			<td>
				<?php if (file_exists('public/img/barang/'.$item->barang_id.'/'.$item->barang_id.'_siteplan.jpg')) { ?>
					<div class="product_img" style="background-image: url('<?php echo base_url('public/img/barang/'.$item->barang_id.'/'.$item->barang_id.'_siteplan.jpg?'.rand(1,999)); ?>')" onclick="window.open('<?php echo base_url('public/img/barang/'.$item->barang_id.'/'.$item->barang_id.'_siteplan.jpg?'.rand(1,999)); ?>');">
					</div>
					<input type="checkbox" name="barang_siteplan_delete" /> Delete Siteplan Image
				<?php } ?>
				<input type="file" name="barang_siteplan">
			</td>
		</tr>
		<tr valign="top">
			<td><label>E-Brochure</label></td>
			<td>:</td>
			<td>
				<?php if (file_exists('public/img/barang/'.$item->barang_id.'/'.$item->barang_id.'_ebrochure.pdf')) { ?>
					<a href="<?php echo base_url('public/img/barang/'.$item->barang_id.'/'.$item->barang_id.'_ebrochure.pdf'); ?>" target="ebrochure">						
						view E-brochure
					</a>
					<br><input type="checkbox" name="barang_ebrochure_delete" /> Delete File
				<?php } ?>
				<input type="file" name="barang_ebrochure">
				<span style="font-size: 8pt;">PDF file Only </span>
			</td>
		</tr>
		<tr valign="top">
			<td><label>Nama</label></td>
			<td>:</td>
			<td>
				<input name="barang_nama" class="form-control" value="<?php echo $item->barang_nama; ?>" required>
			</td>
		</tr>
		<tr valign="top">
			<td><label>Kategori</label></td>
			<td>:</td>
			<td>
				<select class="form-control" name="kbarang_id">
					<?php foreach ($list_kategori as $kat) { ?>
						<option value="<?php echo $kat->kbarang_id; ?>" <?php echo ($kat->kbarang_id == $item->kbarang_id ? "selected" : "") ?>>
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
						<option value="<?php echo $type->tbarang_id; ?>" <?php echo ($type->tbarang_id == $item->tbarang_id ? "selected" : "") ?>>
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
						<option value="<?php echo $row->lokasi_id; ?>" <?php echo ($row->lokasi_id == $item->lokasi_id ? "selected" : "") ?>>
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
				<input name="barang_size" class="form-control" value="<?php echo $item->barang_size; ?>" type="number" style="width:200px; display: inline; text-align: left;" required>
				<select name="barang_satuan" class="form-control" style="width:100px; display: inline;" >
					<option value="m2" <?php echo ( $item->barang_satuan == 'm2' ? "selected" : ""); ?>>m2</option>
					<option value="ha" <?php echo ( $item->barang_satuan == 'ha' ? "selected" : ""); ?>>ha</option>
				</select>				
			</td>
		</tr>
		<tr valign="top">
			<td><label>Link Website</label></td>
			<td>:</td>
			<td>
				<input name="barang_website" class="form-control" value="<?php echo $item->barang_website; ?>">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Keterangan Singkat</label></td>
			<td>:</td>
			<td>
				<textarea name="barang_keterangan_pendek" class="form-control"><?php echo $item->barang_keterangan_pendek; ?></textarea>
			</td>
		</tr>
		<tr valign="top">
			<td><label>Keterangan</label></td>
			<td>:</td>
			<td>
				<textarea name="barang_keterangan" class="form-control"><?php echo $item->barang_keterangan; ?></textarea>
			</td>
		</tr>
		<tr valign="top">
			<td><label>Highlight</label></td>
			<td>:</td>
			<td>
				<input type="checkbox" name="barang_highlight" <?php echo ($item->barang_highlight == "1" ? "checked" : ""); ?> value="1">				
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
				<input type="text" id="barang_lat" name="barang_lat" value="<?php echo $item->barang_lat; ?>" class="form-control" onchange="set_marker_pos();">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Lokasi - Lng</label></td>
			<td>:</td>
			<td>
				<input type="text" id="barang_lng" name="barang_lng" value="<?php echo $item->barang_lng; ?>" class="form-control" onchange="set_marker_pos();">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="submit" class="btn btn-success btn-lg" name="btn_update" onclick="return confirm('Are you sure want to update this data?')">
					<i class="fa fa-check"></i>
					Update
				</button>
			</td>
			<td align="right">
				<button type="submit" class="btn btn-danger btn-lg" name="btn_delete" onclick="return confirm('Are you sure want to remove this data?')">
					<i class="fa fa-trash"></i>
					Delete
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
	var loc = {lat: <?php echo $item->barang_lat; ?>, lng: <?php echo $item->barang_lng; ?>};
	var map;
	var marker;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: loc
    });
    marker = new google.maps.Marker({
      position: loc,
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