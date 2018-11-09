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
	<h1>Master Lokasi</h1>
	<a href="<?php echo site_url('backend/lokasi/0'); ?>">
		<button class="btn btn-success">
			<i class="fa fa-plus"></i> Add New Data
		</button>
	</a>
	<br>
	<hr>
	<table class="table-striped table-bordered table-hover datatable table-list">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama Lokasi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0; ?>
			<?php foreach($list as $item) { ?>
			<tr onclick="document.location='<?php echo site_url('backend/lokasi/'.$item->lokasi_id); ?>'">
				<td><?php echo ++$i; ?></td>
				<td><?php echo $item->lokasi_nama; ?></td>
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