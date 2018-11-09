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
	<h1>Master Portfolio - Detail</h1>
	<?php echo form_open_multipart('backend/portfolioPost');?>
	<table width="700px" class="basic">
		<tr>
			<td><label>ID</label></td>
			<td>:</td>
			<td>
				<?php echo $item->portfolio_id; ?>
				<input name="portfolio_id" class="form-control" value="<?php echo $item->portfolio_id; ?>" type="hidden">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Image</label></td>
			<td>:</td>
			<td>
				<?php if (file_exists("public/img/portfolio/" . $item->portfolio_id . ".jpg")) { ?>
				<div style="width:200px;height:200px;background-size:cover;background-image:url('<?php echo base_url("public/img/portfolio/" . $item->portfolio_id . ".jpg"); ?>');">
				</div>
				<?php } ?>
				<input type="file" name="portfolio_img">
			</td>
		</tr>
		<tr>
			<td><label>Judul</label></td>
			<td>:</td>
			<td>
				<input name="portfolio_judul" class="form-control" value="<?php echo $item->portfolio_judul; ?>">
				
			</td>
		</tr>
		<tr>
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
			<td><label>Text Image</label></td>
			<td>:</td>
			<td>
				<?php if (file_exists("public/img/portfolio/" . $item->portfolio_id . "_text.jpg")) { ?>
				<div style="width:200px;height:200px;background-size:cover;background-image:url('<?php echo base_url("public/img/portfolio/" . $item->portfolio_id . "_text.jpg"); ?>');">						
				</div>
				<?php } ?>
				<input type="file" name="portfolio_textimg">
			</td>
		</tr>
		<tr>
			<td><label>Text</label></td>
			<td>:</td>
			<td>
				<textarea name="portfolio_text" class="form-control"><?php echo $item->portfolio_text; ?></textarea>
				
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
<script type="text/javascript">
</script>
<?php $part["script"] .= ob_get_flush(); ?>



<?php $this->load->view("_layouts/backend/index",$part); ?>