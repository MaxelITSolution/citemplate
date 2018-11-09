<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $part = Array();
?>

<?php ob_clean(); ob_start(); //loader ?>
  <link href="<?php echo base_url("public/vendor/960/960-responsive_about.css"); ?>" rel="stylesheet" type="text/css">
<?php $part["loader"] = ob_get_flush(); ?>

<?php ob_clean(); ob_start(); //style ?>
<style>
.banner_text {
  margin-top: 285px; 
  margin-left: 60%; 
  color: white; 
  font-family: 'Exo 2', sans-serif;
}
.banner_text .text_title1 {
  font-size: 80pt; 
  letter-spacing: -5px; 
  font-weight: 900;
}
.banner_text .text_title2 {
  font-size: 20pt; 
  letter-spacing: 2px
}
.banner_text .text_subtitle {
  letter-spacing: 2px; 
  margin-left:5px; 
  margin-top: -15px; 
  font-size: 10pt;
}
@media (max-width: 768px) {
  .banner_text {
    margin-top: 350px; 
    margin-left: 50%; 
  }
  .banner_text .text_title1 {
    font-size: 60pt; 
    letter-spacing: -5px; 
    font-weight: 900;
  }
  .banner_text .text_title2 {
    font-size: 15pt; 
    letter-spacing: 2px
  }
  .banner_text .text_subtitle {
    letter-spacing: 2px; 
    margin-left:5px; 
    margin-top: -10px; 
    font-size: 6pt;
  }
  .device_hide {
    display: none;
  }
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
            <div class="banner_text">
              <div>
                <span class="text_title1">30</span> 
                <span class="text_title2">years</span>
              </div>
              <div class="text_subtitle">INDUSTRIAL DEVELOPMENT</div>
            </div>
       </div>
    </div>
    
    <div id="bg_gambar" style="background-image:url(<?php echo base_url("public/img/banner/banner_about.jpg?".rand(0,999)); ?>);background-position:top">&nbsp;</div>
    <!-- end of image headline -->
  
  <!-- bagian label HEADLINE -->
  <div class="container_12">
      <div class="grid_2">
      &nbsp;
      </div>
      <div class="grid_8" >
          <br>
          <h3 class="headline" style="text-align:center;color:#FCEE21;font-size:18pt;margin:0px;">OUR STORY</h3>
          <br>
      </div>
      <div class="grid_2" >
    &nbsp;
      </div>
  </div>
  <!-- Biru -->
   <div id="bg_shapeBiru">&nbsp;</div>
  <!-- -->
  <!-- bagian of bagian label HEADLINE -->
    
   
  
  
   
  <div class="clear" style="height:50px;">&nbsp;</div>

  <!-- bagian konten utama 3 colom menu deskripsi dan gambar -->    
    <div class="container_12" style="background-color:#f1f1f2;">
        <div class="grid_4" style="background-color:#fcee21;margin-left:-1px;">
          <div id="head_grid" style="width:98%;background-color:#bbbdbf;overflow:hidden;">
            <h1 class="font_Esphimere" style="margin:0;padding-top:50px;padding-left:50px;text-align:left;">ABOUT</h1>
            <!-- tambahan -->
            <h4 id="detail_profil" class="click_profil font_Esphimere" style="margin:0;padding-top:20px;padding-left:50px;text-align:left;font-style:italic;color:#FFF;cursor:pointer;">
              PROFILE
            </h4>
            <hr id="detail_profil_garis" class="garis_" style="border:#fcee21 solid 0.5px; width:100%;float:left;margin-left:50px;">
            <div style="clear:both;height:5px;">&nbsp;</div>
            <h4 id="detail_history" class="click_profil font_Esphimere" style="cursor:pointer;margin:0;padding-top:10px;padding-left:50px;text-align:left;color:#033066;">
              HISTORY
            </h4>
            <hr id="detail_history_garis" class="garis_" style="border:#fcee21 solid 0.5px; width:0%;float:left;margin-left:50px;">
            <div style="clear:both;height:5px;">&nbsp;</div>
            <!-- end of tambahan -->
          </div>
        </div>
        <div class="grid_6">

        <!-- tambahan konten -->
          <div style="width:100%;display:inline-block; height: 380px; overflow: auto;"  >
          
            <div id="detail_profil_conten" style="width:100%; overflow:auto;"  class="conten_">
              <div id="artikel_grid" class="artikel" style="letter-spacing:2px;line-height:21pt;font-size:10pt;">
                <span class="headline" style="margin:0;padding:0;text-align:center;color:#29aae2;letter-spacing:1px;text-align:left;font-size:18pt;display:block;">
                  <?php echo $cms["about-profile-title".$this->session->userdata("cmslang")]; ?>
                </span> 
                <?php //echo $cms["about-profile-content".$this->session->userdata("cmslang")]; ?>
                <div style="background-image:url(<?php echo base_url("public/img/profile_text.png"); ?>);
                background-position:center;background-repeat:no-repeat;height:250px;width:100%;max-width:440px; background-size: contain;">&nbsp;
                </div>
              </div>
            </div>
                
            <div id="detail_history_conten" style="width:100%;display:none;overflow: auto;" class="conten_">
              <div id="artikel_grid" class="artikel" style="letter-spacing:2px;line-height:21pt;font-size:10pt;">
                <span class="headline" style="margin:0;padding:0;text-align:center;color:#29aae2;letter-spacing:1px;text-align:left;font-size:18pt;display:block;">
                  <?php echo $cms["about-history-title".$this->session->userdata("cmslang")]; ?>
                </span>
                <?php echo $cms["about-history-content".$this->session->userdata("cmslang")]; ?>
              </div>
            </div>
          
          
          </div>
        <!-- end of tambahan-->

        </div>
        <div class="grid_2 device_hide" >
            <div id="img_grid" style="background-image:url(<?php echo base_url("public/img/about_right.png"); ?>);
            background-position:center right;background-repeat:no-repeat;height:380px;width:100%; ">&nbsp;
            </div>
        </div>
    </div>
  <!-- end of bagian konten utama 3 colom menu deskripsi dan gambar -->    

    
    
    
    
    <div class="clear" style="height:50px;">&nbsp;</div>
    
    
    
    
    
    <!-- paragraf text 2 kolom-->
    <div class="container_12">
      <div class="grid_1">&nbsp;</div>
      <div class="grid_3">
        <h5 class="headline" style="margin:0;padding:0;text-align:center;color:#29aae2;letter-spacing:1px;text-align:left;line-height:21pt;">
          <?php echo $cms["about-point1-title".$this->session->userdata("cmslang")]; ?>
        </h5>
      </div>
      <div class="grid_8">
      <div class="artikel" style="margin:0;padding:0;font-size:10pt;color:#033066;letter-spacing:2px;line-height:21pt;width:100%;">
        <?php echo $cms["about-point1-content".$this->session->userdata("cmslang")]; ?>
      </div>
      </div>
    </div>
    
    <div class="clear" style="height:25px;">&nbsp;</div>
    
    <div class="container_12">
        <div class="grid_1">&nbsp;</div>
        <div class="grid_3">
          <h5 class="headline" style="margin:0;padding:0;text-align:center;color:#29aae2;letter-spacing:1px;text-align:left;line-height:21pt;">
            <?php echo $cms["about-point2-title".$this->session->userdata("cmslang")]; ?>
          </h5>
        </div>
        <div class="grid_8">
        <div class="artikel" style="margin:0;padding:0;font-size:10pt;color:#033066;letter-spacing:2px;line-height:21pt;width:100%;">
          <?php echo $cms["about-point2-content".$this->session->userdata("cmslang")]; ?>
        </div>
        </div>
    </div>
    
     <div class="clear" style="height:25px;">&nbsp;</div>
    
    <div class="container_12">
        <div class="grid_1">&nbsp;</div>
        <div class="grid_3">
          <h5 class="headline" style="margin:0;padding:0;text-align:center;color:#29aae2;letter-spacing:1px;text-align:left;line-height:21pt;">
            <?php echo $cms["about-point3-title".$this->session->userdata("cmslang")]; ?>
          </h5>          
        </div>
        <div class="grid_8">
        <div class="artikel" style="margin:0;padding:0;font-size:10pt;color:#033066;letter-spacing:2px;line-height:21pt;width:100%;">
          <?php echo $cms["about-point3-content".$this->session->userdata("cmslang")]; ?>
        </div>
        </div>
    </div>
    
    <!--
     <div class="clear" style="height:25px;">&nbsp;</div>
    
    <div class="container_12">
        <div class="grid_1">&nbsp;</div>
        <div class="grid_3">
          <h5 class="headline" style="margin:0;padding:0;text-align:center;color:#29aae2;letter-spacing:1px;text-align:left;line-height:21pt;">
            <?php echo $cms["about-point4-title".$this->session->userdata("cmslang")]; ?>
          </h5>
        </div>
        <div class="grid_8">
          <p class="artikel" style="margin:0;padding:0;font-size:10pt;color:#033066;letter-spacing:2px;line-height:21pt;width:100%;">
            <?php echo $cms["about-point4-content".$this->session->userdata("cmslang")]; ?>
          </p >
        </div>
    </div>
    -->
    <!-- end of paragraf text 2 kolom -->
    
    


    
    <div class="clear" style="height:50px;">&nbsp;</div>
    
    
    
    

    <!-- bagian 3 kolom +icon -->
    <div class="container_12" style="margin-top:50px;">
      <div class="grid_4">
        <img src="<?php echo base_url("public/img/SVG_homePutih.svg"); ?>" width="150px" style="margin-top:20px;position:relative;display:block;margin-left:auto;margin-right:auto;max-width:100px;" alt="Home" />
        <h3 class="headline" style="color:#fcee21; text-align: center;">
          <?php echo $cms["about-section1-title".$this->session->userdata("cmslang")]; ?>
        </h3>
        <div class="artikel" style="font-size:10pt;color:#FFFFFF;letter-spacing:2px;line-height:18pt;">
          <?php echo $cms["about-section1-content".$this->session->userdata("cmslang")]; ?>
        </div>
      </div>
      <div class="grid_4">
        <img src="<?php echo base_url("public/img/SVG_locationPutih.svg"); ?>" width="150px" style="margin-top:20px;position:relative;display:block;margin-left:auto;margin-right:auto;max-width:100px;" alt="Location" />
        <h3 class="headline" style="color:#fcee21; text-align: center;">
          <?php echo $cms["about-section2-title".$this->session->userdata("cmslang")]; ?>
        </h3>
        <div class="artikel" style="font-size:10pt;color:#FFFFFF;letter-spacing:2px;line-height:18pt;">
          <?php echo $cms["about-section2-content".$this->session->userdata("cmslang")]; ?>
        </div>
      </div>
      <div class="grid_4">
        <img src="<?php echo base_url("public/img/SVG_handPutih.svg"); ?>" width="150px" style="margin-top:20px;position:relative;display:block;margin-left:auto;margin-right:auto;max-width:100px;" alt="Hand" />
        <h3 class="headline" style="color:#fcee21; text-align: center;">
          <?php echo $cms["about-section3-title".$this->session->userdata("cmslang")]; ?>
        </h3>          
        <div class="artikel" style="font-size:10pt;color:#FFFFFF;letter-spacing:2px;line-height:18pt;">
          <?php echo $cms["about-section3-content".$this->session->userdata("cmslang")]; ?>
        </div>
      </div>
            
    <!-- background biru 100% -->
      <div id="bg_biru3kolom" style="width:100%;position:absolute;background-color:#1b75bb;left:0;z-index:-1;margin-top:-30px;">&nbsp;</div>
    <!-- end of background biru 100% -->
                
    </div>
    <!-- end of bagian 3 kolom +icon -->
</main>
<?php $part["main"] = ob_get_flush(); ?>


<?php ob_clean(); ob_start(); //script ?>
  <script>
    $(document).ready(function(e) {
     $("#atas_btn").click(function(e) {
        $("html, body").animate({scrollTop: "0"}, 1000);
    });
     
              

    $(".click_profil").click(function(e) {
      //reset
      $(".garis_").css({"width":"0%"});
      $(".conten_").fadeOut();
      $(".click_profil").css({"font-style":"normal", "color":"#033066"});

      var nama = $(this).attr("id");
      var target = $(this);

      //animasi garis dan perubahan konten
      $("#"+nama+"_garis").fadeIn("fast").animate({"width":"100%"},function(){
        $("#"+nama+"_conten").fadeIn();
        target.css({"font-style":"italic", "color":"#FFFF"});
      });

      });       
    });
  </script>
<?php $part["script"] = ob_get_flush(); ?>

<?php ob_clean(); ?>

<?php $this->load->view("_layouts/frontend/index",$part); ?>