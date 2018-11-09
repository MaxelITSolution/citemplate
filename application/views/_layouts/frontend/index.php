<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="index,follow">
    
    <?php if ($page != "article") { ?>
    <meta name="keywords" content="Sewa Pergudangan Jakarta, Sewa Gudang Surabaya, Cari Gudang Surabaya, Beli Gudang, Cari Gudang Disewakan, Gudang Dijual Surabaya">
    <meta name="description" content="Sewa Pergudangan Jakarta Gudang Surabaya Cari Beli Disewakan dijual Surabaya">
    <?php } ?>
    
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php echo (isset($meta) ? $meta : ""); ?>
    <?php if (isset($article->article_meta_title)) { ?>
      <title><?php echo $article->article_meta_title; ?></title>
    <?php } else { ?>
      <title><?php echo (isset($title) && $title != "" ? $title : "Waringin")?></title>
    <?php } ?>

    <script type="text/javascript" src="<?php echo base_url("public/vendor/jquery/jquery-3.2.1.min.js"); ?>"></script>

    <link href="<?php echo base_url("public/img/favicon.png"); ?>" rel="shortcut icon">

    <link href="<?php echo base_url("public/vendor/960/960.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("public/vendor/960/960-responsive.css"); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url("public/css/myCSS.css"); ?>" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/wrg_front.css'); ?>">

    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400|Nunito|Ubuntu|News+Cycle" rel="stylesheet">    
	
<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122682546-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-122682546-1');
	</script>	

    <?php echo (isset($style) ? $style : ""); ?>
    <?php echo (isset($loader) ? $loader : ""); ?>
</head>  
<body>  

  <!-- FB Share Button -->
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); 
    js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=200061417209632&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  </script>
  <script>
    function share2FB(link) {
      FB.ui({
        method: 'share',
        display: 'popup',
        href: link,
  
      }, function(response){});    
    }
  </script>
  <!-- end FB Share Button -->


  <?php require_once("nav.php"); ?>
  <?php echo (isset($main) ? $main : ""); ?>
  <?php require_once("footer.php"); ?>

  <script>
    $(document).ready(function(e) {
      $("#atas_btn").click(function(e) {
        $("html, body").animate({scrollTop: "0"}, 1000);
      });
    });
  </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122682546-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122682546-1');
</script>
  <script type="text/javascript" src="<?php echo base_url("public/js/menuVer2.js"); ?>"></script>
  <?php echo (isset($script) ? $script : ""); ?>
</body>
</html>