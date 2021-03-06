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
	<h1>Master Lokasi - Detail</h1>
	<?php echo form_open_multipart('backend/lokasiPost');?>
	<table width="700px" class="basic">
		<tr>
			<td><label>ID</label></td>
			<td>:</td>
			<td>
				<?php echo $item->lokasi_id; ?>
				<input name="lokasi_id" class="form-control" value="<?php echo $item->lokasi_id; ?>" type="hidden">
			</td>
		</tr>
		<tr>
			<td><label>Nama Lokasi</label></td>
			<td>:</td>
			<td>
				<input name="lokasi_nama" class="form-control" value="<?php echo $item->lokasi_nama; ?>">
				
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