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
	<h1>Master Portfolio</h1>
	<a href="<?php echo site_url('backend/portfolio/0'); ?>">
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
				<th>Gambar</th>
				<th>Judul</th>
				<th>Lokasi</th>
				<th>Text</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0; ?>
			<?php foreach($list as $item) { ?>
			<tr onclick="document.location='<?php echo site_url('backend/portfolio/'.$item->portfolio_id); ?>'">
				<td><?php echo ++$i; ?></td>
				<td>
					<div style="width:100px;height:100px;background-size:cover;background-image:url('<?php echo base_url("public/img/portfolio/" . $item->portfolio_id . ".jpg"); ?>');">
					</div>
				</td>
				<td><?php echo $item->portfolio_judul; ?></td>
				<td><?php echo $item->lokasi_nama; ?></td>
				<td><?php echo $item->portfolio_text; ?></td>
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