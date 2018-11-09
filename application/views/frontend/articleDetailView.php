<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $part = Array();
?>

<?php ob_clean(); ob_start(); //loader ?>
    <link href="<?php echo base_url("public/vendor/960/960-responsive_portofolio.css"); ?>" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="<?php echo base_url("public/vendor/jquerycycle2/jquery.cycle2.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("public/vendor/jquerycycle2/jquery.cycle2.carousel.min.js"); ?>"></script>
<?php $part["loader"] = ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //style ?>
<?php $part["style"] = ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //style ?>
  <meta name="title" content="<?php echo $article->article_meta_title; ?>">
  <meta name="keywords" content="<?php echo $article->article_meta_keyword; ?>">
  <meta name="description" content="<?php echo $article->article_meta_description; ?>">
<?php $part["meta"] = ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //main ?>
<main>
    <!-- TAMBAHAN new bar -->
     <div id="bar_shape" >
          <div id="triangle-bottomleft">&nbsp;</div>
          
          <div id="parent_triangle-topright">
              <div id="triangle-topright" >&nbsp;</div>
          </div>
     </div>
     <!-- end of TAMBAHAN new bar -->

      <!-- image headline -->
    <div class="container_12">
       <img id="more_info" src="<?php echo base_url("public/img/SVG_moreInfo.svg"); ?>" alt="More Info" />
       <h1 id="more_info_phone" class="headline" ><?php echo $cms["moreinfo-phone"]; ?></h1>   
       <div class="grid_12" style="height:450px;position:relative;display:block;overflow:hidden;">
            <!-- <img src="<?php echo base_url("public/img/img_PembatasBiru_Kecilkiri.png"); ?>" style="width:100%;max-width:960px;position:absolute;bottom:0;margin-bottom:-2px;" /> -->
       </div>
    </div>
    
    <div id="bg_gambar" style="background-image:url(<?php echo base_url("public/img/banner/banner_article.jpg?".rand(0,999)); ?>);background-position:center">&nbsp;</div>
    <!-- end of image headline -->
  
  
  
  
  
  <!-- bagian label FIND YOUR WAREHOUSE -->
  <div class="container_12">
      <div class="grid_1">
      &nbsp;
      </div>
      <div class="grid_10" >
          <br>
          <h3 class="headline" style="text-align:center;color:#FCEE21;font-size:18pt;margin:0px;"><?php echo $article->article_title; ?></h3>
          <br>
      </div>
      <div class="grid_1" >
    &nbsp;
      </div>
  </div>
  
  <!-- kuning2 -->
   <div id="bg_shapeBiru2">&nbsp;</div>
  <!-- -->
  <!-- end of baguian label FIND YOUR WAREHOUSE -->    
    
    

  <div class="container_12 hoverable">
    <?php $article_img = "public/img/article/".$article->article_id.".jpg"; ?>
    <?php if (file_exists($article_img)) { ?>
      <div style="margin:auto; width:100%; height: 300px; background-repeat: no-repeat; ;background-position: center; background-size: contain; background-image:url('<?php echo base_url($article_img."?".rand(1,999)); ?>');"></div>
      <br>
    <?php } ?>

    <div class="grid_12"  style="background-color:#37C6F7;padding:10px;color:#033066;font-size:10pt;margin-top:8px;letter-spacing:2px;line-height:16pt;">
      <div style="text-align: right;">
        <?php echo $article->article_date; ?>          
      </div>
      <div class="artikel" style="overflow-x:hidden;width:100%; min-height: 200px;box-sizing: border-box;">
        <br />
        <?php echo nl2br($article->article_content); ?>
      </div>
    </div>
  </div>
    
  <div class="clear" style="height:10px;">&nbsp;</div>   
</main>
<?php $part["main"] = ob_get_flush(); ?>


<?php ob_clean(); ob_start(); //script ?>
<?php $part["script"] = ob_get_flush(); ?>

<?php ob_clean(); ?>

<?php $this->load->view("_layouts/frontend/index",$part); ?>