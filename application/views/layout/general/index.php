<!DOCTYPE HTML>
<html>
  <head>
    <title><?php echo _SITE_TITLE; ?></title>		
    <link rel="shortcut icon" href="<?php echo _PATH_IMAGE; ?>stts.ico">
    <link type="text/css" rel="stylesheet" href="<?php echo _PATH_LAYOUT . _CONFIG_LAYOUT ?>/style.css"></link>
  </head>
  
  <body>
	
    <?php require_once("header.php"); ?>
    <div class="body-shell">
      <div class="body-outer">						
        <?php require_once("nav.php"); ?>
        <div class="body-right">
        <?php require_once("main.php"); ?>
        </div>
      </div>	
    </div>

    <?php require_once("footer.php"); ?>

  </body>
  <?php include(_PATH_VIEW . "view_form_login.php"); ?>
  <?php include(_PATH_VIEW . "view_form_registrasi.php"); ?>
  <script src="<?php echo _PATH_SCRIPT."script_footer.js"; ?>"></script>
</html>