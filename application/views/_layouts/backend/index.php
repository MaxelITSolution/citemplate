<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>WARINGIN Warehouse | Backend</title>
  <script src="<?php echo base_url('public/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/basic.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/backend.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/vendor/fontawesome470/css/font-awesome.min.css'); ?>">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url("public/img/favicon.png"); ?>" rel="shortcut icon">


  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/vendor/bootstrap337/css/bootstrap.min.css'); ?>">
  <script src="<?php echo base_url('public/vendor/bootstrap337/js/bootstrap.min.js'); ?>"></script>

  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/vendor/materialize/css/materialize.min.css'); ?>"> -->
  <!-- <script src="<?php echo base_url('public/vendor/materialize/js/materialize.min.js'); ?>"></script> -->

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/vendor/datatables/datatables.min.css'); ?>">
  <script src="<?php echo base_url('public/vendor/datatables/datatables.min.js'); ?>"></script>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/vendor/jqueryui/jquery-ui.min.css'); ?>">
  <script src="<?php echo base_url('public/vendor/jqueryui/jquery-ui.min.js'); ?>"></script>

	<script src="<?php echo base_url('public/vendor/tinymce/tinymce.min.js'); ?>"></script>

  <script>
	$(document).ready(function() {
	tinyMCE.baseURL = "<?php echo base_url("public/vendor/tinymce/"); ?>";
		tinyMCE.init({
			selector:'textarea',
			plugins: [
			    "advlist autolink lists link image charmap print preview anchor",
			    "searchreplace visualblocks code fullscreen",
			    "insertdatetime media table contextmenu paste imagetools wordcount",
          "responsivefilemanager"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image responsivefilemanager",
      
      external_filemanager_path:"../../public/vendor/filemanager/",
      filemanager_title:"Responsive Filemanager" ,
      external_plugins: { "filemanager" : "../filemanager/plugin.min.js"},
      
      editor_deselector : "mceNoEditor2"
		});		
	});
  </script>
  <?php echo (isset($style) ? $style : ""); ?>
  <?php echo (isset($loader) ? $loader : ""); ?>
</head>  
<body>  

  <?php require_once("nav.php"); ?>
  <?php echo (isset($main) ? $main : ""); ?>
  <?php require_once("footer.php"); ?>

  <?php echo (isset($script) ? $script : ""); ?>
  
</body>
</html>