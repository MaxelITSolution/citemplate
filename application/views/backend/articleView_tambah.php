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
	<h1>Article - Add new data</h1>
	<?php echo form_open_multipart('backend/articlePost');?>
	<table width="700px" class="basic">
		<tr valign="top">
			<td><label>Image</label></td>
			<td>:</td>
			<td>
				<input type="file" name="article_image">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Title</label></td>
			<td>:</td>
			<td>
				<input name="article_title" class="form-control" value="" required>				
			</td>
		</tr>
		<tr valign="top">
			<td><label>Short Content</label></td>
			<td>:</td>
			<td>
				<textarea name="article_content_short" class="form-control"></textarea>
			</td>
		</tr>
		<tr valign="top">
			<td><label>Content</label></td>
			<td>:</td>
			<td>
				<textarea name="article_content" class="form-control"></textarea>
			</td>
		</tr>
		<tr valign="top">
			<td><label>URL</label></td>
			<td>:</td>
			<td>
				<input name="article_url" class="form-control" value="">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Date</label></td>
			<td>:</td>
			<td>
				<input name="article_date" class="form-control datepicker" value="<?php echo date("Y-m-d"); ?>" required style="width:100px; display: inline;"> (yyyy-mm-dd)
			</td>
		</tr>
		<tr valign="top">
			<td><label>Meta-title</label></td>
			<td>:</td>
			<td>
				<input name="article_meta_title" class="form-control" value="">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Meta-keyword</label></td>
			<td>:</td>
			<td>
				<input name="article_meta_keyword" class="form-control" value="">
			</td>
		</tr>
		<tr valign="top">
			<td><label>Meta-description</label></td>
			<td>:</td>
			<td>
        <input type="text" name="article_meta_description" class="form-control" value="" />
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
<script>
	$(".datepicker").datepicker();
</script>
<?php $part["script"] .= ob_get_flush(); ob_clean(); ?>



<?php $this->load->view("_layouts/backend/index",$part); ?>