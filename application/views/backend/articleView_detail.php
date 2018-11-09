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
	<h1>Article - Detail</h1>
	<?php echo form_open_multipart('backend/articlePost');?>
	<table width="100%" class="basic" cellpadding="5">
		<tr valign="top">
			<td><label>ID</label></td>
			<td>:</td>
			<td>
				<?php echo $item->article_id; ?>
				<input name="article_id" class="form-control" value="<?php echo $item->article_id; ?>" type="hidden">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Image</label></td>
			<td>:</td>
			<td>
				<?php if (file_exists('public/img/article/'.$item->article_id.'.jpg')) { ?>
					<div class="product_img" style="background-image: url('<?php echo base_url('public/img/article/'.$item->article_id.'.jpg?'.rand(1,999)); ?>')" onclick="window.open('<?php echo base_url('public/img/article/'.$item->article_id.'.jpg?'.rand(1,999)); ?>');">
					</div>
					<input type="checkbox" name="article_image_delete" /> Delete Image
				<?php } ?>
				<input type="file" name="article_image">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Title</label></td>
			<td>:</td>
			<td>
				<input name="article_title" class="form-control" value="<?php echo $item->article_title; ?>" required>				
			</td>
		</tr>
		<tr valign="top">
			<td><label>Short Content</label></td>
			<td>:</td>
			<td>
				<textarea name="article_content_short" class="form-control"><?php echo $item->article_content_short; ?></textarea>
			</td>
		</tr>
		<tr valign="top">
			<td><label>Content</label></td>
			<td>:</td>
			<td>
				<textarea name="article_content" class="form-control"><?php echo $item->article_content; ?></textarea>
			</td>
		</tr>
		<tr valign="top">
			<td><label>URL</label></td>
			<td>:</td>
			<td>
				<input name="article_url" class="form-control" value="<?php echo $item->article_url; ?>">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Date</label></td>
			<td>:</td>
			<td>
				<input name="article_date" class="form-control datepicker" value="<?php echo $item->article_date; ?>" required style="width:100px; display: inline;"> (yyyy-mm-dd)
			</td>
		</tr>
		<tr valign="top">
			<td><label>Meta-title</label></td>
			<td>:</td>
			<td>
				<input name="article_meta_title" class="form-control" value="<?php echo $item->article_meta_title; ?>">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Meta-keyword</label></td>
			<td>:</td>
			<td>
				<input name="article_meta_keyword" class="form-control" value="<?php echo $item->article_meta_keyword; ?>">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Meta-description</label></td>
			<td>:</td>
			<td>
				<input type="text" name="article_meta_description" class="form-control" value="<?php echo $item->article_meta_description; ?>" />
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
<script>
	$(".datepicker").datepicker();
</script>
<?php $part["script"] .= ob_get_flush(); ob_clean(); ?>



<?php $this->load->view("_layouts/backend/index",$part); ?>