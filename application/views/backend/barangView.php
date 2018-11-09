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
	<h1>Master Tempat</h1>
	<a href="<?php echo site_url('backend/tempat/0'); ?>">
		<button class="btn btn-success">
			<i class="fa fa-plus"></i> Add New Data
		</button>
	</a>
	<br>
	<hr>
	<table class="table-striped table-bordered table-hover table-list datatable">
		<thead>
			<tr>
				<th>#</th>
				<th>&nbsp;</th>
				<th>Nama Tempat</th>
				<th>Kategori</th>
				<th>Type</th>
				<th>Lokasi</th>
				<th>Highlight</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0; ?>
			<?php foreach($list as $item) { ?>
			<tr onclick="document.location='<?php echo site_url('backend/tempat/'.$item->barang_id); ?>'">
				<td><?php echo ++$i; ?></td>
				<td align="center">
					<button class="btn btn-info" onclick="event.stopPropagation(); document.location='<?php echo site_url('backend/tempatpic/'.$item->barang_id); ?>'">Galeri</button>
				</td>
				<td><?php echo $item->barang_nama; ?></td>
				<td><?php echo $item->kbarang_nama; ?></td>
				<td><?php echo $item->tbarang_nama; ?></td>
				<td><?php echo $item->lokasi_nama; ?></td>
				<td><?php echo($item->barang_highlight == "1" ? "V" : "-"); ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</main>
<?php $part["main"] .= ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //script ?>
<script type="text/javascript">
$(document).ready(function(){
    $('.datatable').DataTable();
});
</script>
<?php $part["script"] .= ob_get_flush(); ?>



<?php $this->load->view("_layouts/backend/index",$part); ?>