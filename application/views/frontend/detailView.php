<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $part = Array();
?>

<?php ob_clean(); ob_start(); //loader ?>
  <link href="<?php echo base_url("public/vendor/960/960-responsive_detail.css"); ?>" rel="stylesheet" type="text/css">
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
       <div class="grid_12" style="height:450px;position:relative;display:block;">
            <!-- <img src="<?php echo base_url("public/img/img_PembatasBiru_Kecilkiri.png"); ?>" style="width:100%;max-width:960px;position:absolute;bottom:0;" /> -->
       </div>
    </div>
    
    <div id="bg_gambar" style="background-image:url(<?php echo base_url("public/img/barang/".$barang->barang_id."/".$barang->barang_id."_banner.jpg?".rand(0,999)); ?>);background-position:center">&nbsp;</div>
    <!-- end of image headline -->
 
  
  
  
  <!-- bagian label FIND YOUR WAREHOUSE -->
  <div class="container_12">
      <div class="grid_2">
      &nbsp;
      </div>
      <div class="grid_8" >
          <br>
          <h3 class="headline" style="text-align:center;color:#033066;font-size:18pt;margin:0px;"><?php echo strtoupper($barang->barang_nama); ?></h3>
          <br>
      </div>
      <div class="grid_2" >
    &nbsp;
      </div>
  </div>
  
  <!-- kuning2 -->
   <div id="bg_shapeKuning2">&nbsp;</div>
  <!-- -->
  <!-- end of baguian label FIND YOUR WAREHOUSE -->
    


 <div class="clear" style="height:50px;">&nbsp;</div>



  <!-- bagian slide show images-->
  <div class="container_12">
      <div class="grid_12">
      <!--
      <div style="height:300px;width:100%;">
      &nbsp;
      <img src="images/FD0FBE69.jpg" style="float:left;" />
      <img src="images/FD0FBE69.jpg" style="float:left;margin-left:10px;margin-right:10px; " />
      <img src="images/FD0FBE69.jpg" style="float:left;" />
      </div>
      -->
             <div class="cycle-slideshow" 
            data-cycle-fx="carousel"
            data-cycle-next="#nextView"
            data-cycle-prev="#prevView"
            data-cycle-timeout=1000
            data-cycle-slides="> div"
            >
                <?php $url = "public/img/barang/".$barang->barang_id."/".$barang->barang_id."_cover.jpg"; ?>
                <?php if (file_exists($url)) { ?>                      
                  <div style="width:300px; height: 300px; background-position: center; background-size: cover; background-image:url('<?php echo base_url($url); ?>');""></div>
                <?php } ?>

                <?php for($i=1 ; $i<= 10; $i++) { ?>
                  <?php $url = "public/img/barang/".$barang->barang_id."/".$barang->barang_id."-".$i.".jpg"; ?>
                  <?php if (file_exists($url)) { ?>                      
                    <div style="width:300px; height: 300px; background-position: center; background-size: cover; background-image:url('<?php echo base_url($url); ?>');""></div>
                    <!-- <img src="<?php echo base_url($url); ?>" style="width:300px; height: 300px;" /> -->
                  <?php } ?>
                <?php } ?>
            </div>
    
    
            <div id="nav" style="position:absolute;margin-top:-190px;">

              <div style="position:relative;margin-left:auto;margin-right:auto;width:100%;text-align:center;">
                <img src="<?php echo base_url("public/img/SVG_panahKiri.svg"); ?>" id="prevView" style="cursor:pointer;float:left;width:80px;height:80px;" alt="<" />
                <img src="<?php echo base_url("public/img/SVG_panahKanan.svg"); ?>" id="nextView" style="cursor:pointer;float:right;width:80px;height:80px;" alt=">" />
              </div>
            </div>
    
    </div>
  </div>
 <!-- end bagian slide show images-->



  
 <div class="clear" style="height:50px;">&nbsp;</div>
 

  <!-- bagian side plan-->
  <div class="container_12">
      
      <div class="grid_7"
        
      >
        <h1 class="headline" style="color:#29aae2;margin-top:0;margin-bottom:0;">SITEPLAN</h1> <br>
        <a target="NEW" href="<?php echo base_url("public/img/barang/".$barang->barang_id."/".$barang->barang_id."_siteplan.jpg"); ?>">
          <div 
            style="
              border:#033066 solid 1px;
              background-color:#FFF;
              position:relative;
              display:block;
              z-index:-1;
              width:100%;
              height:407px;
              background-image: url('<?php echo base_url("public/img/barang/".$barang->barang_id."/".$barang->barang_id."_siteplan.jpg"); ?>');
              background-size: contain;
              background-position: center;
              background-repeat: no-repeat;
            "          
          >
          &nbsp;
          </div>
        </a>
      </div>
     

      <div class="grid_5">
      
            <div id="boxBiru" style="display:inline-block;position:relative;background-color:#033066;padding:30px;
                   box-shadow: 0 18px 18px -5px rgba(0, 0, 0, 0.5);
            ">
               
               <h3 class="artikel" style="color:#FFFFFF;margin:0;padding:0;"><?php echo $barang->barang_nama; ?></h3>
               <h5 class="artikel" style="color:#FFFFFF;margin:0;padding:0;margin-top:8px;"> Size : <?php echo $barang->barang_size; ?> <?php echo ($barang->barang_satuan == 'ha' ? 'ha' : 'm<sup>2</sup>') ?></h5>
               <h5 class="artikel" style="color:#FFFFFF;margin:0;padding:0;margin-top:8px;"> Location : <?php echo $barang->lokasi_nama; ?></h5>
               <hr  style="margin:0;padding:0;border:#FFFFFF solid 0.5px;margin-top:8px;" />
               
             
               <div class="artikel" 
               style="margin-top:8px;padding:0;color:#FFFFFF;font-size:10pt;letter-spacing:2px;line-height:16pt;overflow-x:hidden;width:100%;text-align:justify">
                 
                 <?php echo $barang->barang_keterangan; ?>
                </div>
                
                 <div class="clear" style="height:26px;">&nbsp;</div>
               
            <img src="<?php echo base_url("public/img/SVG_shareIMG.svg"); ?>" style="float:left;width:40px;height:40px;cursor:pointer;margin-top:10px;margin-left: 20px" onclick="share2FB('<?php echo site_url("detail/".$barang->barang_id); ?>')" alt="Share" />  
            <a href="https://www.google.com/maps/?q=<?php echo $barang->barang_lat.",".$barang->barang_lng; ?>" target="MAP">
            <img src="<?php echo base_url("public/img/SVG_GoogleMap.svg"); ?>" style="float:right;width:60px;height:60px;cursor:pointer;" alt="Map" />
            </a>
            <h5 style="font-family:Ubuntu;color:#FFF;float:right;margin-right:10px;">Go to google maps ></h4>  
            
            <?php if (file_exists("public/img/barang/".$barang->barang_id."/".$barang->barang_id."_ebrochure.pdf")) { ?>
            <div class="clear" style="height:10px;">&nbsp;</div>
            <a href="<?php echo base_url("public/img/barang/".$barang->barang_id."/".$barang->barang_id."_ebrochure.pdf"); ?>" download>
              <img src="<?php echo base_url("public/img/SVG_download.svg"); ?>" style="float:right;width:60px;height:60px;cursor:pointer;" alt="Download" />
            </a>
            <h5 style="font-family:Ubuntu;color:#FFF;float:right;margin-right:10px;">Download our e-brochure here ></h4>
            <?php } ?>

            <?php if ($barang->barang_website != "") { ?>
            <div class="clear" style="height:10px;text-align: center;">&nbsp;</div>
            <div style="text-align: center;">
              <a href="<?php echo (strpos($barang->barang_website, "http://") === false ? "http://" : "").$barang->barang_website; ?>" style="color: white;" target="new">
                <h5 style="font-family:Ubuntu;color:#FFF;">Go to Website</h4>
              </a>
            </div>
            <?php } ?>
          </div>


      </div>
      <div class="grid_1">&nbsp;</div>


  </div>
</main>
<?php $part["main"] = ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //script ?>
<?php $part["script"] = ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //meta ?>
  <meta property="og:url"           content="<?php echo site_url("detail/".$barang->barang_id); ?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Waringin Warehouse - <?php echo $barang->barang_nama; ?>" />
  <meta property="og:description"   content="<?php echo $barang->barang_keterangan; ?>" />
  <?php 
    // $url_siteplan = "public/img/barang/".$barang->barang_id."/".$barang->barang_id."_siteplan.jpg";
    $url_image1 = "public/img/barang/".$barang->barang_id."/".$barang->barang_id."_cover.jpg";
    $url_website = "public/img/logo.png";
    $image = $url_website;
    if (file_exists($url_image1)) { $image = $url_image1; }
    // if (file_exists($url_siteplan)) { $image = $url_siteplan; }
    $image = site_url($image);
  ?>
  <meta property="og:image"         content="<?php echo $image; ?>" />
<?php $part["meta"] = ob_get_flush(); ?>


<?php ob_clean(); ?>

<?php $this->load->view("_layouts/frontend/index",$part); ?>

