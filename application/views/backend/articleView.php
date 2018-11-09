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
	<h1>Article</h1>
	<a href="<?php echo site_url('backend/article/0'); ?>">
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
				<th>Judul</th>
				<th>Tanggal</th>
				<th>Isi</th>
				<th>URL</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 0; ?>
			<?php foreach($list as $item) { ?>
			<tr onclick="document.location='<?php echo site_url('backend/article/'.$item->article_id); ?>'">
				<td><?php echo ++$i; ?></td>
				<td><?php echo $item->article_title; ?></td>
				<td><?php echo $item->article_date; ?></td>
				<td><?php echo $item->article_content_short; ?></td>
				<td><?php echo $item->article_url; ?></td>
				<td><?php echo ($item->article_status == 1 ? "V" : "-" ); ?></td>
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