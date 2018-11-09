<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $part = Array();
?>


<?php ob_clean(); ob_start(); //style ?>  
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
#map {
  width: 500px; 
  height: 380px; 
  border:0;
  margin-top: 30px;
}
#button_thumb {
  cursor:pointer;
  color:#FFF;
  background-color:#113564;
  position:relative;
  padding-bottom:3px;
  padding-top:3px;
  display:block;
  text-align:center;
  font-family: 'News Cycle', sans-serif;
  font-size:10pt;
}
.thumb_kiri div, .thumb_kanan div {
  width: 100%;
}
.thumbnail_info {
  overflow-x:hidden;
  overflow-y:auto;
  box-sizing: border-box;
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
  #map {
    width: 100%; 
    height: 300px; 
    border:0;
    margin-top: 30px;
  }
  .thumb_kiri, .thumb_kanan {
    width: 100%;
    height: 200px;
    float: none;
    margin: 0px auto 5px;
  }
  .thumbnail_info {
  }
  .device_hide {
    display: none;
  }
  #button_thumb {
    margin-top: 5px;
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
       <div class="grid_12" style="height:450px;position:relative;display:block;vertical-align: bottom;">
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
    
    <div id="bg_gambar" style="background-image:url(<?php echo base_url("public/img/banner/banner_landing.jpg?".rand(0,999)); ?>);background-position:center;">&nbsp;</div>
    <!-- end of image headline -->

  <!-- bagian label FIND YOUR WAREHOUSE -->
  <div class="container_12">
      <div class="grid_2">
      &nbsp;
      </div>
      <div class="grid_8" >
          <br>
          <h3 class="headline" style="text-align:center;color:#033066;font-size:18pt;margin:0px;">
            FIND YOUR WAREHOUSE
          </h3>
          <br>
          <select id="loc_cb" name="loc_cb" class="cb">
            <option value="">Location</option>
            <?php foreach ($listLokasi as $row ) { ?>
            <option value='<?php echo $row->lokasi_id; ?>'><?php echo strtoupper($row->lokasi_nama); ?></option>
            <?php } ?>
          </select>
          
          <select id="cat_cb" name="cat_cb" class="cb" >
            <option value="warehouse">WAREHOUSE</option>
            <option value="land">LAND</option>
          </select>
          
          <select id="type_cb" name="type_cb" class="cb" >
            <option value="sale">For Sale</option>
            <option value="lease">For Lease</option>
          </select>
          
          <img src="<?php echo base_url("public/img/SVG_search.svg"); ?>" id="search_btn" class="search_class" style="cursor:pointer;display:block;margin-left:auto;margin-right:auto;max-width:50px;" onclick="home_search()" alt="Search" />
          
      </div>
      <div class="grid_2" >
    &nbsp;
      </div>
  </div>
  
  
  
  
  <!-- kuning2 -->
   <!-- <div id="bg_shapeKuning" >&nbsp;</div> -->
  <!-- -->
  <!-- end of baguian label FIND YOUR WAREHOUSE -->
    
   <!-- bagian peta dan 4 image -->
    <div id="peta_dan_4images" class="container_12" >
      <div class="grid_7" >
        <div id="map"></div>
      </div>
      
      <div class="grid_5" style="padding-top:30px;">
        <div style="overflow:auto; height: 405px;">
        <?php $ctr = 0; ?>
        <?php foreach ($listBarang as $row) { ?>
          <?php $class = (++$ctr % 2 == 1 ? "thumb_kiri" : "thumb_kanan")?>
          <a href="<?php echo site_url("detail/".$row->barang_id); ?>">
          <div class="<?php echo $class; ?> highlight_thumbnail" style="background-image:url('<?php echo base_url("public/img/barang/".$row->barang_id."/".$row->barang_id."_cover.jpg?".rand(0,999)); ?>');">
             <div class="thumbnail_info" style="position:relative;color:#FFF;background-color:#1f4680;height:100%; margin-top: 0px;">
               <h3 style="font-family:Ubuntu;font-size:1em;margin:0;padding:0;margin-top:10px;"><?php echo $row->barang_nama; ?></h3>
               <br>
               <div style="font-family:Ubuntu;font-size:0.85em;margin:0;padding:0px;">
                 <p>
                 <?php echo $row->barang_keterangan_pendek; ?>
                 </p>
               </div>
               <br>
             </div>
          </div>
          </a>
        <?php } ?>
        </div>
        
        <div class="clear">&nbsp;</div>
        <div class="thumb_kiri device_hide" style="padding-bottom:0;">&nbsp;</div>
        
        <a href="<?php echo site_url('sale/warehouse'); ?>">        
          <div id="button_thumb">
            EXPLORE MORE >
          </div>
        </a>
  
      </div>
    </div>
   <!-- end of bagian peta dan 4 image -->
    
    
    
    
    
    <!-- bagian gambar bar dan artikel tengah -->
  <div style="width:100%;height:222px;background-image:url(<?php echo base_url("public/img/home_bar.png?".rand(0,999)); ?>);background-position:center top;background-size:100%;margin-top:50px;background-repeat:no-repeat;">&nbsp;</div>
  
    <div class="container_12" id="gambar_bar" >
      <div class="grid_3">&nbsp;</div>
      <div class="grid_6">
         <div style="background-color:#EFEFEF;position:relative;display:block;padding-left:40px;padding-right:40px;padding-top:10px;padding-bottom:10px;box-shadow: 9px 9px 4px #999999;">
         <h3 class="headline" style="color:#293883;margin:0;">About Us</h3><br>
         <h3 class="headline" style="color:#293883;margin:0;">
            <?php echo $cms["home-aboutus-title".$this->session->userdata("cmslang")]; ?>              
          </h3>
          <div class="artikel" style="font-size:10pt;color:#9D9E9F;letter-spacing:2px;line-height:18pt;">
            <?php echo $cms["home-aboutus-content".$this->session->userdata("cmslang")]; ?>
          </div>
         </div>
      </div>
       <div class="grid_3">&nbsp;</div>
    </div>
     <!-- bagian gambar bar dan artikel tengah-->
    
    
    
    
    
    <!-- bagian 3 kolom +icon -->
    <div class="container_12" style="margin-top:50px;">
        <div class="grid_4">
          <img src="<?php echo base_url("public/img/SVC_iconHome.svg"); ?>" width="150px" style="position:relative;display:block;margin-left:auto;margin-right:auto;max-width:100px;" alt="Home" />
          <h3 class="headline" style="color:#293883; text-align: center;">
            <?php echo $cms["about-section1-title".$this->session->userdata("cmslang")]; ?>            
          </h3>
          <div class="artikel" style="font-size:10pt;color:#9D9E9F;letter-spacing:2px;line-height:18pt;">
            <?php echo $cms["about-section1-content".$this->session->userdata("cmslang")]; ?>
          </div>
        </div>
        <div class="grid_4">
          <img src="<?php echo base_url("public/img/SVG_iconLocation.svg"); ?>" width="150px" style="position:relative;display:block;margin-left:auto;margin-right:auto;max-width:100px;" alt="Location" />
          <h3 class="headline" style="color:#293883; text-align: center;">
            <?php echo $cms["about-section2-title".$this->session->userdata("cmslang")]; ?>
          </h3>
          <div class="artikel" style="font-size:10pt;color:#9D9E9F;letter-spacing:2px;line-height:18pt;">
            <?php echo $cms["about-section2-content".$this->session->userdata("cmslang")]; ?>
          </div>
        </div>
        <div class="grid_4">
          <img src="<?php echo base_url("public/img/SVG_iconHand.svg"); ?>" width="150px" style="position:relative;display:block;margin-left:auto;margin-right:auto;max-width:100px;" alt="Hand" />
          <h3 class="headline" style="color:#293883; text-align: center;">
            <?php echo $cms["about-section3-title".$this->session->userdata("cmslang")]; ?>
          </h3>
          <div class="artikel" style="font-size:10pt;color:#9D9E9F;letter-spacing:2px;line-height:18pt;">
            <?php echo $cms["about-section3-content".$this->session->userdata("cmslang")]; ?>
          </div>
        </div>
    </div>
    <!-- end of bagian 3 kolom +icon -->
  
</main>
<?php $part["main"] = ob_get_flush(); ?>


<?php ob_clean(); ob_start(); //script ?>
  <script type="text/javascript">
    $(document).ready(function(e) {
      // $(".thumb_kiri").fadeTo("slow",0.5);
      // $(".thumb_kanan").fadeTo("slow",0.5);

      $(".highlight_thumbnail").mouseenter(function(e) {
         $(this).children(".thumbnail_info").fadeIn("fast");
      });
      $(".thumbnail_info").mouseleave(function(e) {        
         $(this).fadeOut("fast");
      });
/*/      
      $(".thumb_kiri").click(function(e) {
         $(this).children("div").toggle();
      });

      $(".thumb_kiri").mouseover(function(e) {
         $(this).clearQueue().fadeTo("fast",1);
      });

      $(".thumb_kiri").mouseout(function(e) {
         $(".thumb_kiri").fadeTo("fast",0.5);
      });


      $(".thumb_kanan").click(function(e) {
         $(this).children("div").toggle();
      });

      $(".thumb_kanan").mouseover(function(e) {
         $(this).clearQueue().fadeTo("fast",1);
      });

      $(".thumb_kanan").mouseout(function(e) {
         $(".thumb_kanan").fadeTo("fast",0.5);
      });
/*/      

    });

  function home_search() {
    var url = "";
    if ($('#type_cb').val() != "") { url += $('#type_cb').val(); }
    url += "/";
    if ($('#cat_cb').val() != "") { url += $('#cat_cb').val(); }
    url += "/";
    if ($('#loc_cb').val() != "") { url += $('#loc_cb').val(); }
    document.location = url;
  }
  function initMap() {
    var sby = {lat: -7.250445, lng: 112.768845};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: sby
    });
    var markers = [];
    var infowindows = [];
    var ctr=0;
    <?php $ctr = 0; ?>
    <?php foreach($allBarang as $b) { ?>
    ctr = <?php echo $ctr; ?>;
    markers[ctr] = new google.maps.Marker({
      map: map,
      position: {lat: <?php echo $b->barang_lat; ?>, lng: <?php echo $b->barang_lng; ?>},
    });

    markers[ctr].addListener('click', function() {
      infowindows[<?php echo $ctr;?>].open(map, markers[<?php echo $ctr;?>]);
    });


    infowindows[ctr] = new google.maps.InfoWindow({
      content: "<b><u><?php echo $b->barang_nama; ?></u></b><br><?php echo $b->barang_keterangan; ?>"
    });

    <?php $ctr++; ?>;
    <?php } ?>

    var bounds = new google.maps.LatLngBounds();
    for (var i = 0; i < markers.length; i++) {
      bounds.extend(markers[i].getPosition());
    }
    map.fitBounds(bounds);



  }
  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPRo01l7uGPlz3xGj1ttaQsJ8xw_WHjF8&callback=initMap">
  </script>

<?php $part["script"] = ob_get_flush(); ?>


<?php ob_clean(); ?>



<?php $this->load->view("_layouts/frontend/index",$part); ?>