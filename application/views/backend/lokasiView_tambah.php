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
	<h1>Master Lokasi - Add new data</h1>
	<?php echo form_open('backend/lokasiPost');?>
	<table width="700px" class="basic">
		<tr>
			<td><label>Nama Lokasi</label></td>
			<td>:</td>
			<td>
				<input name="lokasi_nama" class="form-control" value="" required>				
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
<script type="text/javascript">
</script>
<?php $part["script"] .= ob_get_flush(); ?>



<?php $this->load->view("_layouts/backend/index",$part); ?>