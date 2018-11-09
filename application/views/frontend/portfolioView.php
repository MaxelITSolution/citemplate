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
    
    <div id="bg_gambar" style="background-image:url(<?php echo base_url("public/img/banner/banner_portfolio.jpg?".rand(0,999)); ?>);background-position:center">&nbsp;</div>
    <!-- end of image headline -->
  
  
  
  
  
  <!-- bagian label FIND YOUR WAREHOUSE -->
  <div class="container_12">
      <div class="grid_2">
      &nbsp;
      </div>
      <div class="grid_8" >
          <br>
          <h3 class="headline" style="text-align:center;color:#FCEE21;font-size:18pt;margin:0px;">OUR PROJECT</h3>
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
    

    
    
    
   <!-- bagian OUR FEATURED PROJECTS dan search location -->
   <div class="container_12" style="margin-top:40px;">
   
   <div class="grid_2">
    
        <div style="display:inline-block;position:relative; height: 0; border-bottom: 50px solid #BBBDBF;
        border-right: 12px solid transparent;
       box-shadow: 0 13px 10px -8px rgba(0, 0, 0, 0.5);
        ">
        <h3 class="headline" style="color:#033066;margin:10px;padding:0px;letter-spacing:2px;">CATEGORY</h3>
        </div>
    <br>
        <?php foreach($listLokasi as $lokasi) { ?>
          
          <a class="font_Esphimere" href="<?php echo site_url("portfolio/" . $lokasi->lokasi_id); ?>">
            <h4 class="font_Esphimere" style="color:#033066;margin:10px;padding:0px;letter-spacing:2px;<?php echo ($param_lokasi == $lokasi->lokasi_id ? "font-weight: bold;" : ""); ?>">
              <?php echo $lokasi->lokasi_nama; ?>              
            </h4>
          </a>
        <?php } ?>
   </div>
   

    <div class="grid_10">

      <div class="cycle-slideshow" 
        data-cycle-fx="carousel"
        data-cycle-next="#nextView"
        data-cycle-prev="#prevView"
        data-cycle-timeout=2000
        data-cycle-slides="> div"        
      >
          <?php for($i=1 ; $i<= 5; $i++) { ?>
            <?php $url = "public/img/banner/banner_portfolio-".$i.".jpg"; ?>
            <?php if (file_exists($url)) { ?>                      
              <div style="width:780px; height: 300px; background-position: center; background-size: cover; background-image:url('<?php echo base_url($url); ?>');"></div>
            <?php } ?>
          <?php } ?>
      </div>

    </div>
  
   
   
   </div>
   <!-- end of bagian OUR FEATURED PROJECTS dan search location -->
    
    
    

  <?php $ctr = 0; ?>
  <?php foreach ($listPortfolio as $pf) { ?>
    <?php ++$ctr; ?>
    <div class="clear" style="height:50px;">&nbsp;</div>
  
  
    <!--for bagian List Gudang -->
  
    <!-- <a href="<?php //echo site_url("detail"); ?>" > -->
    <!-- test ke detail-->

    <!-- </a> test ke detail -->

    <?php if ($ctr % 2 == 1) { ?>
    <!-- content biru dan border -->
    
      <div class="container_12">
          <div class="grid_2" >&nbsp;</div>
          <div class="grid_4" style="margin-right:-10px;">
             <img class="img_gudang" src="<?php echo base_url("public/img/portfolio/" . $pf->portfolio_id . ".jpg?".rand(0,999)); ?>" 
             style="
                  display:block;
                  margin-left:auto;
                  margin-right:auto;" alt="Image" />
          </div>
        
          <div class="grid_6"  style="margin-top:15px;">          
            <div class="border_list"  style="
              border:#033066 solid 1px;
              background-color:#FFF;
              position:absolute;
              z-index:-1;
            ">
            &nbsp;
            </div>
             
            <div class="content_biru" style="background-color:#033066; overflow: auto;">
              <h3 class="artikel" style="margin:0;color:#FFFF;padding:0;"><?php echo $pf->portfolio_judul; ?></h3>             
              <?php if (file_exists("public/img/portfolio/" . $pf->portfolio_id . "_text.jpg")) { ?>              
              <img class="img_gudang" src="<?php echo base_url("public/img/portfolio/" . $pf->portfolio_id . "_text.jpg"); ?>" alt="Image" 
                style="
                  display:block;
                  margin: 5px auto;
                  " />
              <?php } ?>
              <div class="artikel content_img_gudang" style="padding:0;color:#FFFFFF;letter-spacing:2px;line-height:16pt;overflow-x:hidden;">
                <?php echo $pf->portfolio_text; ?>                
              </div>
            </div>
          </div>
      </div>
    
    <!-- end of content biru dan border -->
    <?php } else { ?>

       <!-- content biru soft tanpa border -->
      <div class="container_12">
          <div class="grid_2" >&nbsp;</div>
      
          <div class="grid_6 modeX"  style="margin-top:15px;">
          
            <div class="border_putih"  style="
              border:#033066 solid 1px;
              background-color:#FFF;
              position:absolute;
              z-index:-1;
              display:none;
            ">
            &nbsp;
          </div>
             
            <div class="content_biru" style="background-color:#29aae2;float:right;">
              <h3 class="artikel" style="margin:0;color:#FFFF;"><?php echo $pf->portfolio_judul; ?></h3>
             
              <div class="artikel content_img_gudang" style="padding:0;color:#FFFFFF;letter-spacing:2px;line-height:16pt;overflow-x:hidden;">               
               <?php echo $pf->portfolio_text; ?>
              </div>
              
            </div>
          </div>
          
           <div class="grid_4" >
              <img class="img_gudang" src="<?php echo base_url("public/img/portfolio/" . $pf->portfolio_id . ".jpg"); ?>"  alt="Image"
                style="
                  display:block;
                  margin-left:auto;
                  margin-right:auto;" />
          </div>
      </div>
      <!-- end of content biru soft tanpa border -->
    <?php } ?>
  <?php } ?>
    
  <!--end for bagian List Gudang -->
   
   
  <div class="clear" style="height:10px;">&nbsp;</div>
   
   <!-- pagging list -->
   
   <div class="container_12">
   <div class="grid_9">
   &nbsp;
   </div>
   <div class="grid_3">
    <p class="font_Esphimere" style="cursor:pointer;">        
        <?php echo $this->pagination->create_links(); ?>
    </p>
   </div>
   <!-- end of pagging list -->
</main>
<?php $part["main"] = ob_get_flush(); ?>


<?php ob_clean(); ob_start(); //script ?>
<?php $part["script"] = ob_get_flush(); ?>

<?php ob_clean(); ?>

<?php $this->load->view("_layouts/frontend/index",$part); ?>