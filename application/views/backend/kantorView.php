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
	<h1>Master Kantor</h1>
	<a href="<?php echo site_url('backend/kantor/0'); ?>">
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
				<th>Alamat</th>
				<th>Alamat2</th>
				<th>Telp</th>
				<th>Fax</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0; ?>
			<?php foreach($list as $item) { ?>
			<tr onclick="document.location='<?php echo site_url('backend/kantor/'.$item->kantor_id); ?>'">
				<td><?php echo ++$i; ?></td>
				<td><?php echo $item->kantor_alamat; ?></td>
				<td><?php echo $item->kantor_alamat2; ?></td>
				<td><?php echo $item->kantor_telp; ?></td>
				<td><?php echo $item->kantor_fax; ?></td>
				<td><?php echo $item->kantor_email; ?></td>
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