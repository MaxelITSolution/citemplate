<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $part = Array();
?>


<?php ob_clean(); ob_start(); //style ?>
    <link href="<?php echo base_url("public/vendor/960/960-responsive_for_sale.css"); ?>" rel="stylesheet" type="text/css">
<?php $part["loader"] = ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //style ?>
  <style type="text/css">
    .hoverable:hover {
      cursor: pointer;
    }
  </style>
<?php $part["style"] = ob_get_flush(); ?>


<?php ob_clean(); ob_start(); //main ?>
<main>
     <div id="bar_shape" >
          <div id="triangle-bottomright">&nbsp;</div>
          <div id="parent_triangle-topleft" >
              <div id="triangle-topleft">&nbsp;</div>
          </div>
     </div>
    <!-- image headline -->
    <div class="container_12">
    <!-- tambahan menu kecil-->
       <img id="more_info" src="<?php echo base_url("public/img/SVG_moreInfo.svg"); ?>" alt="More Info" />
       <h1 id="more_info_phone" class="headline" ><?php echo $cms["moreinfo-phone"]; ?></h1>   
        <!-- end of tambahan menu kecil -->
       <div class="grid_12" style="height:450px;position:relative;display:block;">
            <!-- <img src="<?php echo base_url("public/img/img_news.png"); ?>" style="width:100%;max-width:960px;position:absolute;bottom:0;" /> -->
       </div>
    </div>
    
    <div id="bg_gambar" style="background-image:url(<?php echo base_url("public/img/banner/banner_browse.jpg?".rand(0,999)); ?>);background-position:center;">&nbsp;</div>
    <!-- end of image headline -->
    
  <!-- bagian label FIND YOUR WAREHOUSE -->
  <div class="container_12">
      <div class="grid_2">
      &nbsp;
      </div>
      <div class="grid_8" >
          <br>
          <h3 class="headline" style="text-align:center;color:#FCEE21;font-size:18pt;margin:0px;">
            OUR <?php echo strtoupper($cat_text); ?> FOR <?php echo strtoupper($type_text); ?>
          </h3>
          <br>
      </div>
      <div class="grid_2" >
    &nbsp;
      </div>
  </div>
  
  <!-- kuning2 -->
   <div id="bg_shapeBiru">&nbsp;</div>
  <!-- -->
  <!-- end of baguian label FIND YOUR WAREHOUSE -->
    

    
    
    
   <!-- bagian OUR FEATURED PROJECTS dan search location -->
   <div class="container_12" style="margin-top:40px;">
   <div class="grid_7">
    <div style="display:inline-block;position:relative; height: 0; border-bottom: 50px solid #BBBDBF;
  border-right: 12px solid transparent;
   box-shadow: 0 13px 10px -8px rgba(0, 0, 0, 0.5);
    ">
    
    <h3 class="headline" style="color:#033066;margin:10px;padding:0px;letter-spacing:2px;">OUR FEATURED PROJECTS</h3></div>
   </div>
   
   <div class="grid_5">
        <div id="label_location" >
            <h3 class="headline" style="float:left;color:#033066;margin:0;padding:0;margin-right:20px;letter-spacing:2px;">LOCATION :</h3> 
              <select name="location_cb" class="cb" style="color:#FFF;float:right;margin-right:0;" onchange="document.location='<?php echo site_url($type_text."/".$cat_text); ?>/'+this.value">
                <option value="">search here</option>
                <?php foreach($listLokasi as $row) { ?>
                  <option value="<?php echo $row->lokasi_id; ?>" <?php echo ($location == $row->lokasi_id ? "selected" : ""); ?> >
                    <?php echo $row->lokasi_nama; ?>                      
                  </option>
                <?php } ?>
              </select>
          </div>
   </div>
   
   
   </div>
   <!-- end of bagian OUR FEATURED PROJECTS dan search location -->
    
    
    
     <div class="clear" style="height:50px;">&nbsp;</div>
     
     
     <!--for bagian List Gudang -->
    <?php foreach($listBarang as $row) { ?>
    <a href="<?php echo site_url('detail/'.$row->barang_id); ?>">
    <div class="container_12 hoverable"">
        <div class="grid_3" >
           <div style="width:200px; height: 200px; background-position: center; background-size: cover; background-image:url('<?php echo base_url("public/img/barang/".$row->barang_id."/".$row->barang_id."_cover.jpg?".rand(1,999)); ?>');">
           </div>           
           <br>
        </div>
      

        <div class="grid_9"  style="background-color:#37C6F7;">
        
           <div style="padding:15px; padding-bottom: 30px;display:block;position:relative;">
           
           <h3 class="artikel" style="color:#033066;margin:0;padding:0;"><?php echo $row->barang_nama; ?></h3>
           <h5 class="artikel" style="color:#033066;margin:0;padding:0;margin-top:8px;"> Size : <?php echo $row->barang_size; ?> <?php echo ($row->barang_satuan == 'ha' ? 'ha' : 'm<sup>2</sup>') ?></h5>
           <h5 class="artikel" style="color:#033066;margin:0;padding:0;margin-top:8px;"> Location : <?php echo $row->lokasi_nama; ?></h5>
           <hr  style="margin:0;padding:0;border:#033066 solid 0.5px;margin-top:8px;" />              
           <div class="artikel content_img_gudang" style="margin-top:8px;padding:0;color:#033066;font-size:10pt;letter-spacing:2px;line-height:16pt;overflow-x:hidden;padding-bottom:5px;width:100%">           
             <?php echo $row->barang_keterangan_pendek; ?>
           </div>
            
           <img src="<?php echo base_url("public/img/SVG_next.svg"); ?>"  style="position:absolute;right:0;cursor:pointer;margin-top:-15px;margin-right:8px;" width="50px" onclick="document.location='<?php echo site_url('detail/'.$row->barang_id); ?>'" alt=">" />
            
           </div>
        </div>
    </div>
    </a>
    
    <div class="clear" style="height:50px;">&nbsp;</div>
    <?php } ?>
    
   <!--end for bagian List Gudang -->

</main>
<?php $part["main"] = ob_get_flush(); ?>


<?php ob_clean(); ob_start(); //script ?>
<?php $part["script"] = ob_get_flush(); ?>

<?php ob_clean(); ?>

<?php $this->load->view("_layouts/frontend/index",$part); ?>