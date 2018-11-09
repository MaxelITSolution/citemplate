<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $part = Array();
?>


<?php ob_clean(); ob_start(); //style ?>
  <link href="<?php echo base_url("public/vendor/960/960-responsive_for_sale.css"); ?>" rel="stylesheet" type="text/css">
<?php $part["loader"] = ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //style ?>
    
<?php $part["style"] = ob_get_flush(); ?>


<?php ob_clean(); ob_start(); //main ?>
<main>

    <!-- image headline -->
    <div class="container_12">
       <div class="grid_12" style="height:450px;position:relative;display:block;">
            <img src="<?php echo base_url("public/img/img_PembatasBiru.png"); ?>" style="width:100%;max-width:960px;position:absolute;bottom:0;" />
       </div>
    </div>
    
    <div id="bg_gambar" style="background-image:url(<?php echo base_url("public/img/imgSlide02.jpg?".rand(0,999)); ?>);background-position:center">&nbsp;</div>
    <!-- end of image headline -->
  
  <!-- bagian label FIND YOUR WAREHOUSE -->
  <div class="container_12">
      <div class="grid_2">
      &nbsp;
      </div>
      <div class="grid_8" >
          <br>
          <h3 class="headline" style="text-align:center;color:#FCEE21;font-size:18pt;margin:0px;">OUR WAREHOUSE FOR SALE</h3>
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
              <select name="location_cb" class="cb" style="color:#FFF;float:right;margin-right:0;">
              <option >serach here</option>
              </select>
          </div>
   </div>
   
   
   </div>
   <!-- end of bagian OUR FEATURED PROJECTS dan search location -->
    
    
    
     <div class="clear" style="height:50px;">&nbsp;</div>
     
     
     <!--for bagian List Gudang -->
    <div class="container_12">
        <div class="grid_3" >
           <!--
           <img src="images/FD0FBE69.jpg" style="max-height:228px;height:100%;display:block;margin-left:auto;margin-right:auto;" />
           -->
           <img class="img_gudang" src="<?php echo base_url("public/img/FD0FBE69.jpg"); ?>" style="width:100%;display:block;margin-left:auto;margin-right:auto;" />
           
           <br>
        </div>
      
        <div class="grid_9"  style="background-color:#37C6F7;">
        
           <div style="padding:15px;display:block;position:relative;">
           
           <h3 class="artikel" style="color:#033066;margin:0;padding:0;">GUDANG A </h3>
           <h5 class="artikel" style="color:#033066;margin:0;padding:0;margin-top:8px;"> Size : 500m<sup>2</sup></h5>
           <h5 class="artikel" style="color:#033066;margin:0;padding:0;margin-top:8px;"> Location : Sidoarjo</h5>
           <hr  style="margin:0;padding:0;border:#033066 solid 0.5px;margin-top:8px;" />
       
         
           <p class="artikel content_img_gudang" style="margin-top:8px;padding:0;color:#033066;font-size:10pt;letter-spacing:2px;line-height:16pt;overflow-x:hidden;padding-bottom:5px;width:100%">
             
             Lorem ipsum dolor sit amet, consectetur adipiscing 
elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            
            <img src="<?php echo base_url("public/img/SVG_next.svg"); ?>"  style="position:absolute;right:0;cursor:pointer;margin-top:-15px;margin-right:8px;" width="30px"/>
            
            </div>
        </div>
    </div>
    
        <div class="clear" style="height:50px;">&nbsp;</div>

    
    
     <div class="container_12">
        <div class="grid_3" >
           <!--
           <img src="images/FD0FBE69.jpg" style="max-height:228px;height:100%;display:block;margin-left:auto;margin-right:auto;" />
           -->
           <img class="img_gudang" src="<?php echo base_url("public/img/FD0FBE69.jpg"); ?>" style="width:100%;display:block;margin-left:auto;margin-right:auto;" />
           
           <br>
        </div>
      
        <div class="grid_9"  style="background-color:#37C6F7;">
        
           <div style="padding:15px;display:block;position:relative;">
           
           <h3 class="artikel" style="color:#033066;margin:0;padding:0;">GUDANG A </h3>
           <h5 class="artikel" style="color:#033066;margin:0;padding:0;margin-top:8px;"> Size : 500m<sup>2</sup></h5>
           <h5 class="artikel" style="color:#033066;margin:0;padding:0;margin-top:8px;"> Location : Sidoarjo</h5>
           <hr  style="margin:0;padding:0;border:#033066 solid 0.5px;margin-top:8px;" />
       
         
           <p class="artikel content_img_gudang" style="margin-top:8px;padding:0;color:#033066;font-size:10pt;letter-spacing:2px;line-height:16pt;overflow-x:hidden;padding-bottom:5px;width:100%">
             
             Lorem ipsum dolor sit amet, consectetur adipiscing 
elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            
            <img src="<?php echo base_url("public/img/SVG_next.svg"); ?>"  style="position:absolute;right:0;cursor:pointer;margin-top:-15px;margin-right:8px;" width="30px"/>
            
            </div>
        </div>
    </div>

   <!--end for bagian List Gudang -->
    
</main>
<?php $part["main"] = ob_get_flush(); ?>


<?php ob_clean(); ob_start(); //script ?>
<?php $part["script"] = ob_get_flush(); ?>


<?php ob_clean(); ?>

<?php $this->load->view("_layouts/frontend/index",$part); ?>