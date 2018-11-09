<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $part = Array();
?>

<?php ob_clean(); ob_start(); //loader ?>
  <link href="<?php echo base_url("public/vendor/960/960-responsive_contact.css"); ?>" rel="stylesheet" type="text/css">
<?php $part["loader"] = ob_get_flush(); ?>


<?php ob_clean(); ob_start(); //main ?>
<main>
    <!-- TAMBAHAN new bar -->
    <div id="bar_shape" >
        <div id="triangle-bottomright">&nbsp;</div>
        <div id="parent_triangle-topleft" >
            <div id="triangle-topleft">&nbsp;</div>
        </div>
    </div>
    <!-- end of TAMBAHAN new bar -->
    <!-- image headline -->
    <div class="container_12">
    <!-- tambahan menu kecil-->
       <img id="more_info" src="<?php echo base_url("public/img/SVG_moreInfo.svg"); ?>" alt="More Info" />
       <h1 id="more_info_phone" class="headline" ><?php echo $cms["moreinfo-phone"]; ?></h1>   
        <!-- end of tambahan menu kecil -->
       <div class="grid_12" style="height:450px;position:relative;display:block;">
            <!-- <img src="<?php echo base_url("public/img/img_PembatasBiru_Kecilkanan.png"); ?>" style="width:100%;max-width:960px;position:absolute;bottom:0;" /> -->
       </div>
    </div>
    
    <div id="bg_gambar" style="background-image:url(<?php echo base_url("public/img/banner/banner_contact.jpg?".rand(0,999)); ?>);background-position:bottom">&nbsp;</div>
    <!-- end of image headline -->
  
  <!-- bagian label HEADLINE -->
  <div class="container_12">
      <div class="grid_2">
      &nbsp;
      </div>
      <div class="grid_8" >
          <br>
          <h3 class="headline" style="text-align:center;color:#FCEE21;font-size:18pt;margin:0px;">CONTACT US</h3>
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
    


     <!-- bagian 3 kolom +icon -->     
        <div class="container_12" style="margin-top:100px;">
          <div class="grid_4">
            <img src="<?php echo base_url("public/img/SVG_phone.svg"); ?>" width="150px" style="position:relative;display:block;margin-left:auto;margin-right:auto;max-width:100px;" alt="Phone" />
            <h3 class="headline" style="color:#293883;">GET IN TOUCH WITH US</h3>            
          </div>
          <div class="grid_4">
            <img src="<?php echo base_url("public/img/SVG_location.svg"); ?>" width="150px" style="position:relative;display:block;margin-left:auto;margin-right:auto;max-width:100px;" alt="Location" />
            <h3 class="headline" style="color:#293883;">OUR ADDRESS</h3>
          </div>
          <div class="grid_4">
            <img src="<?php echo base_url("public/img/SVG_email.svg"); ?>" width="150px" style="position:relative;display:block;margin-left:auto;margin-right:auto;max-width:100px;" alt="Email" />
            <h3 class="headline" style="color:#293883;">OUR EMAIL</h3>
          </div>
        </div>

        <?php foreach($kantor as $k) { ?>
        <div class="container_12" style="">
          <div class="grid_4">
            <h5 class="font_Esphimere" style="font-size:1em;color:#9D9E9F;letter-spacing:1px;line-height:18pt;">                
              <div><?php echo $k->kantor_telp; ?></div>
              <div><?php echo $k->kantor_fax; ?></div>
            </h5>
          </div>
          <div class="grid_4">
            <h5 class="font_Esphimere" style="font-size:1em;color:#9D9E9F;letter-spacing:1px;line-height:18pt;">
                <?php echo $k->kantor_alamat; ?><br><?php echo $k->kantor_alamat2; ?>
            </h5>
          </div>
          <div class="grid_4">
            <h5 class="font_Esphimere" style="font-size:1em;color:#9D9E9F;letter-spacing:1px;line-height:18pt;">
              <?php echo $k->kantor_email; ?>
            </h5>
          </div>
          <hr>          
        </div>
        <?php } ?>            
        <!-- end of bagian 3 kolom +icon -->
    
    
    
    <div class="clear" style="height:100px;"></div>
    
    <!-- map -->
    <div class="container_12" >
    <div class="grid_2">&nbsp;</div>
    
    <div class="grid_8">
    
      <div id="map" style="width:100%;max-width:620px; height: 340px; border:0;margin:auto;position:relative;display:block;">

      </div>    
    </div>
    

    <div class="grid_2">&nbsp;</div>
    
    <!-- bg -->
    <div id="bg_peta" style="background-color:#29aae2;position:absolute;width:100%;z-index:-1;left:0;margin-top:-30px;">&nbsp;</div>
   
    <!-- end of bg -->
    
    </div>
    <!-- end of map -->
    
            
    <div class="clear" style="height:60px;">&nbsp;</div>
    
    
    
    <!-- bagian label kuning -->
    <div class="container_12">
        <div class="grid_2">
        &nbsp;
        </div>
        <div class="grid_8">
        
        <h3 class="headline" style="color:#293883;background-color:#fcee21;padding:20px;font-size:1em; ">FOR ANY GENERAL INQUIRIES, PLEASE FILL IN THE FOLLOWING CONTACT FORM :</h3>
        </div>
        <div class="grid_2">
        &nbsp;
        </div>
    </div>
    <!-- end of bagian label kuning -->
    
    
    
    
    <!-- bagian label kuning -->
    <div class="container_12">
        <div class="grid_2">
        &nbsp;
        </div>
        <div class="grid_8">
    
        <form id="form_contactus" action="<?php echo site_url('sendemail'); ?>" method="post" onsubmit="event.preventDefault(); contact_submit();">

          <div style="background-color:#f5f5f5;display:inline-block;width:100%;">
            <div style="float:left;width:30%;padding:0 0 10 10px;" >
              <h4 class="headline" style="margin:10px 10px 5px 5px;"><span style="color:#29aae2">* </span>NAME</h4> 
            </div>
            <div style="float:left;width:60%;padding:10px;" >
              <input type="text" style="float:left;position:relative;display:block;width:100%;margin-bottom:10px;" id="name_txt" name="name_txt" required />
            </div>
          </div>
          <!--
          <div class="clear" style="height:10px;">&nbsp;</div>
          
          <div style="background-color:#f5f5f5;display:inline-block;width:100%;">
            <div style="float:left;width:30%;padding:0 0 10 10px;" >
              <h4 class="headline" style="margin:10px 10px 5px 5px;"><span style="color:#29aae2">* </span>ADDRESS</h4> 
            </div>
            <div style="float:left;width:60%;padding:10px;" >
              <textarea style="width:100%;max-width:620px;height:120px;resize:none;margin-bottom:10px;" id="address_txt" name="address_txt" ></textarea>
            </div>
          </div>
          
          <div class="clear" style="height:10px;">&nbsp;</div>
          
          <div style="background-color:#f5f5f5;display:inline-block;width:100%;">
            <div style="float:left;width:30%;padding:0 0 10 10px;" >
              <h4 class="headline" style="margin:10px 10px 5px 5px;"><span style="color:#29aae2">* </span>TELEPHONE</h4> 
            </div>
            <div style="float:left;width:60%;padding:10px;" >
              <input type="text" style="float:left;position:relative;display:block;width:100%;margin-bottom:10px;" id="telp_txt" name="telp_txt" />
            </div>
          </div>
          -->
          <div class="clear" style="height:10px;">&nbsp;</div>
          
          <div style="background-color:#f5f5f5;display:inline-block;width:100%;">
            <div style="float:left;width:30%;padding:0 0 10 10px;" >
              <h4 class="headline" style="margin:10px 10px 5px 5px;"><span style="color:#29aae2">* </span>EMAIL</h4> 
            </div>
            <div style="float:left;width:60%;padding:10px;" >
              <input type="email" style="float:left;position:relative;display:block;width:100%;margin-bottom:10px;" id="email_txt" name="email_txt" required />
            </div>
          </div>
          
          <div class="clear" style="height:10px;">&nbsp;</div>
          
          <div style="background-color:#f5f5f5;display:inline-block;width:100%;">
            <div style="float:left;width:30%;padding:0 0 10 10px;" >
              <h4 class="headline" style="margin:10px 10px 5px 5px;"><span style="color:#29aae2">* </span>SUBJECT</h4> 
            </div>
            <div style="float:left;width:60%;padding:10px;" >
              <input type="text" style="float:left;position:relative;display:block;width:100%;margin-bottom:10px;" id="subject_txt" name="subject_txt" required />
            </div>
          </div>
          
          <div class="clear" style="height:10px;">&nbsp;</div>
          
          <div style="background-color:#f5f5f5;display:inline-block;width:100%;">
            <div style="float:left;width:30%;padding:0 0 10 10px;" >
              <h4 class="headline" style="margin:10px 10px 5px 5px;"><span style="color:#29aae2">* </span>MESSAGE</h4> 
            </div>
            <div style="float:left;width:60%;padding:10px;" >
              <textarea style="width:100%;max-width:620px;height:120px;resize:none;margin-bottom:10px;" id="message_txt" name="message_txt" required ></textarea>            
            </div>
          </div>
        
        
          <button id="submit_contactus" style="cursor:pointer;margin-top:10px;margin-bottom:20px;float:right;width:80px;color:#FFF;background-color:#2BA8E0;position:relative;padding-bottom:3px;padding-top:3px;display:block;text-align:center;font-family: 'News Cycle', sans-serif;font-size:8pt;font-style:italic;border:none;">SEND</button>

        </form>

        <div class="grid_2">
        &nbsp;
        </div>
    </div>
    
</main>
<?php $part["main"] = ob_get_flush(); ?>


<?php ob_clean(); ob_start(); //script ?>
  <script>
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
    <?php foreach($kantor as $k) { ?>
    ctr = <?php echo $ctr; ?>;
    markers[ctr] = new google.maps.Marker({
      map: map,
      position: {lat: <?php echo $k->kantor_lat; ?>, lng: <?php echo $k->kantor_lng; ?>},
    });

    markers[ctr].addListener('click', function() {
      infowindows[<?php echo $ctr;?>].open(map, markers[<?php echo $ctr;?>]);
    });


    infowindows[ctr] = new google.maps.InfoWindow({
      content: "<b><u><?php echo $k->kantor_alamat . "<br>" .  $k->kantor_alamat2; ?></u></b><br><?php echo $k->kantor_telp; ?><br><?php echo $k->kantor_email; ?>"
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