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
	<h1>Master Tempat - Pengaturan Gambar</h1>
	<div class="alert alert-info" style="font-size: 14pt;">
		<?php echo $barang->barang_nama . " (". count($filelist) . " gambar)"; ?>
	</div>
	
	<?php echo form_open_multipart("backend/tempatpicPost"); ?>
	Tambah gambar baru
	<input type="hidden" name="barang_id" value="<?php echo $barang->barang_id; ?>" />
	<input type="file" name="galeri_insert" />
	<button type="submit" class="btn btn-success btn-sm" name="btn_insert">
		<i class="fa fa-save"></i> Simpan
	</button>	
	<?php echo form_close(); ?>

	<hr style="border-color: black; border-width: 2px;">
	<?php foreach($filelist as $f) { ?>
		<div style="
			background-image: url('<?php echo base_url($f); ?>');
			background-size: contain;
			background-repeat: no-repeat;
			width: 100%;
			height: 200px;
			">
		</div>
		<div style="margin-top: 5px;">
			<span><?php echo basename($f); ?> (<?php echo number_format(filesize($f)) . " Bytes"; ?>)</span>
			<?php echo form_open("backend/tempatpicPost",["onsubmit"=>"return confirm('Yakin mau menghapus gambar ini?')"]); ?>
				<input type="hidden" name="barang_id" value="<?php echo $barang->barang_id; ?>" />
				<input type="hidden" name="galeri_filename" value="<?php echo basename($f); ?>" />
				<button type="submit" class="btn btn-danger" name="btn_delete">Delete</button>
			<?php echo form_close(); ?>
		</div>
		<hr style="border-color: black;">
	<?php } ?>
</main>
<?php $part["main"] .= ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //script ?>
<script type="text/javascript">
</script>
<?php $part["script"] .= ob_get_flush(); ?>


<?php $this->load->view("_layouts/backend/index",$part); ?>