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
  <style>
    .slideshow { margin: auto; }
    .slideshow img { width: 100px; height: 100px; padding: 2px; }
    div.responsive img { width: auto; height: auto ;}
    .cycle-pager { position: static; margin-top: 5px }
    div.vertical { width: 100px }
  </style>
<?php $part["style"] = ob_get_flush(); ?>


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
      <div class="grid_2">
      &nbsp;
      </div>
      <div class="grid_8" >
          <br>
          <h3 class="headline" style="text-align:center;color:#FCEE21;font-size:18pt;margin:0px;">OUR ARTICLES</h3>
          <br>
      </div>
      <div class="grid_2" >
    &nbsp;
      </div>
  </div>
  
  <!-- kuning2 -->
   <div id="bg_shapeBiru2">&nbsp;</div>
  <!-- -->
  <!-- end of baguian label FIND YOUR WAREHOUSE -->    
    
    

  <?php $ctr = 0; ?>
     <!--for bagian List Article -->
    <?php if (count($listArticle) > 0) { ?>
    <?php foreach($listArticle as $row) { ?>
    <div class="container_12 hoverable">
      <a href="<?php echo site_url("article/".$row->article_url); ?>">    
        <div class="grid_3" >
           <div style="width:200px; height: 200px; background-position: center; background-size: cover; background-image:url('<?php echo base_url("public/img/article/".$row->article_id.".jpg?".rand(1,999)); ?>');"></div>
           <br>
        </div>      
      </a>

      <a href="<?php echo site_url("article/".$row->article_url); ?>">    
        <div class="grid_9"  style="background-color:#37C6F7;">        
            <div style="padding:15px; padding-bottom: 30px;display:block;position:relative;">           
            <h3 class="artikel" style="color:#033066;margin:0;padding:0;"><?php echo $row->article_title; ?></h3>
            <hr  style="margin:0;padding:0;border:#033066 solid 0.5px;margin-top:8px;" />              
            <div class="artikel" style="margin-top:8px;padding:0;color:#033066;font-size:10pt;letter-spacing:2px;line-height:16pt;overflow-x:hidden;padding-bottom:5px;width:100%; height: 100px;">
             <?php echo nl2br($row->article_content_short); ?>
            </div>
            
            <div style="text-align: right;cursor:pointer;" class="artikel">
                ( Read More > )
            </div>
            
            
            </div>
        </div>
       </a>        
    </div>
    </a>
    
    <div class="clear" style="height:50px;">&nbsp;</div>
    <?php } ?>
    <?php } else { ?>
      <div class="container_12 artikel" style="background-color:#37C6F7; color:#033066;font-size:16pt; text-align: center; padding: 10px; box-sizing: border-box;">
        There are no articles right now.
      </div>
    <?php } ?>
    
  <!--end for bagian List Gudang -->
   
   
  <div class="clear" style="height:10px;">&nbsp;</div>   
</main>
<?php $part["main"] = ob_get_flush(); ?>


<?php ob_clean(); ob_start(); //script ?>
<?php $part["script"] = ob_get_flush(); ?>

<?php ob_clean(); ?>

<?php $this->load->view("_layouts/frontend/index",$part); ?>