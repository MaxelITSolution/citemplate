    <!-- menu desktop -->
    <div class="container_12" id="menu_desktop" >
        <div class="grid_3">
          <a href="<?php echo site_url(""); ?>">
          <img src="<?php echo base_url("public/img/logo.png"); ?>" style="width:100%;max-width:200px;display:block;margin-left:auto;margin-right:auto;border:0;"  />
          </a>        
        </div>
        <div class="grid_7">
            <div style="position:relative;display:block;float:right;" class="menu_top">

              <!-- <a href="<?php echo $cms["account-facebook"]; ?>" target="new"><img src="<?php echo base_url("public/img/SVG_share.svg"); ?>" style="float:left;"/></a> -->
              <a href="#" onclick="share2FB('http://waringinwarehouse.com/')">
                <img src="<?php echo base_url("public/img/SVG_share.svg"); ?>" style="float:left;"/>
              </a>
<!-- <div class="fb-share-button" data-href="http://waringinwarehouse.com/" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwaringinwarehouse.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>               -->

              <a href="<?php echo $cms["account-facebook"]; ?>" target="new"><img src="<?php echo base_url("public/img/SVG_facebook.svg"); ?>" style="float:left;margin-left:5px;"/></a>
              <a href="mailto:<?php echo $cms["contact-email"]; ?>" target="new"><img src="<?php echo base_url("public/img/SVG_mail.svg"); ?>" style="float:left;;margin-left:5px;" /></a>
            </div>
            <div style="position:relative;display:block;float:right;">
            <br>

            <a 
              class="<?php echo (isset($page) && $page == "about" ? "menuSelected" : "menu"); ?>" 
              href="<?php echo site_url("about"); ?>"
            >
              <?php echo (isset($page) && $page == "about" ? "\\" : "<span>\ </span>"); ?>
              ABOUT
            </a> 


            <a id="menu_forsale" 
              class="menu <?php echo (isset($page) && $page == "sale" ? "menuSelected" : ""); ?>" 
              href="<?php echo site_url("sale"); ?>"
            >
              <?php echo (isset($page) && $page == "sale" ? "\\" : "<span >\ </span>"); ?>
              FOR SALE
            </a> 
                <!--
                <a class="menu menuSelected" href="for_lease.html">\ FOR LEASE</a>
                -->                
                <!-- UNTUK SUBMENU DEFAULTE GUNAKAN CLASS submenu_ KEMUDIAN BERIKAN MASING MASING PENEMPATAN MARGIN-LEFT -->
            <div id="menu_forsale_submenu" class="submenu_" style="margin-left:-70px;">                 
              <div class="submenu_child_" >
                <a class="headline" style="font-size:0.8em;padding-left:20px;text-decoration:none;color:#FFF;" href="<?php echo site_url("sale/warehouse"); ?>">WAREHOUSE</a>
                <hr style="margin-top:10px;margin-bottom:10px;" />
                <a class="headline" style="font-size:0.8em;padding-left:20px;text-decoration:none;color:#FFF;" href="<?php echo site_url("sale/land"); ?>">LAND</a>
                <!--
                JIKA INGIN MENAMBAHKAN MENU MAKA COPY PASTE SAJA HR dan A Class headlinenya 
                <hr style="margin-top:10px;margin-bottom:10px;" />
                <a class="headline" style="font-size:0.8em;padding-left:20px;text-decoration:none;color:#FFF;" href="#" >LAND</a>
                -->
                <!-- PASTIKAN DIBAGIAN AKHIR MENU SETELAH ITU DIBERIKAN DIV INI UNTUK MENGATUR POSISI PADDING BAWAH SUBMENUNYA-->
                <div style="clear:both;height:10px;">&nbsp;</div>
              </div>
            </div>



            <!-- COPY PASTE SAMA SEPERTI FOR SALE -->                
            <a id="menu_forlease" 
              class="menu <?php echo (isset($page) && $page == "lease" ? "menuSelected" : ""); ?>" 
              href="<?php echo site_url("lease"); ?>"
            >
              <?php echo (isset($page) && $page == "lease" ? "\\" : "<span >\ </span>"); ?>
              FOR LEASE
            </a> 
            <!--
            <a href="for_lease.html">\ FOR LEASE</a>
            -->
            <div id="menu_forlease_submenu" class="submenu_" style="margin-left:-75px;">
                <div class="submenu_child_">
                    <a class="headline" style="font-size:0.8em;padding-left:20px;text-decoration:none;color:#FFF;" href="<?php echo site_url("lease/warehouse"); ?>" >WAREHOUSE</a>
                    <hr style="margin-top:10px;margin-bottom:10px;" />
                    <a class="headline" style="font-size:0.8em;padding-left:20px;text-decoration:none;color:#FFF;"  href="<?php echo site_url("lease/land"); ?>">LAND</a>
                    <div style="clear:both;height:10px;">&nbsp;</div>
              </div>
            </div>


            <a 
              class="<?php echo (isset($page) && $page == "portfolio" ? "menuSelected" : "menu"); ?>" 
              href="<?php echo site_url("portfolio/1"); ?>"
            >
              <?php echo (isset($page) && $page == "portfolio" ? "\\" : "<span>\ </span>"); ?>
              PORTOFOLIO
            </a>  
            <a 
              class="<?php echo (isset($page) && $page == "contact" ? "menuSelected" : "menu"); ?>" 
              href="<?php echo site_url("contact"); ?>"
            >
              <?php echo (isset($page) && $page == "contact" ? "\\" : "<span>\ </span>"); ?>
              CONTACT
            </a>
            <a 
              class="<?php echo (isset($page) && $page == "contact" ? "menuSelected" : "menu"); ?>" 
              href="<?php echo site_url("contact"); ?>"
            >
              <?php echo (isset($page) && $page == "contact" ? "\\" : "<span>\ </span>"); ?>
              A
            </a>
          </div>
         </div>
         
         <div class="grid_2">
              <div style="position:relative;float:right;" class="menu_top">
              <span style="font-size:10pt;margin-top:7px;" class="subtitle" onclick="document.location='<?php echo site_url('lang'); ?>'">IND</span> 
              <span style="font-size:10pt;margin-top:7px;" class="subtitle">|</span> 
              <span style="font-size:10pt;margin-top:7px;" class="subtitle" onclick="document.location='<?php echo site_url('lang/en'); ?>'">ENG</span>
              </div>
          </div>
    </div><!-- end of menu_desktop -->    


    
    <!-- menu_mobile -->  
    <div style="position:fixed;width:100%;top:0;background-color:#FFF;z-index:100" id="menu_mobile">
    <div class="container_12" >
        <div class="grid_12" style="text-align: center;">
          <a href="<?php echo site_url(""); ?>" style="color:#FFF;text-decoration:none;">
            <img src="<?php echo base_url("public/img/logo.png"); ?>" style="width:100%;max-width:200px;display:block;margin:auto;border:0;"  />
          </a>             
        </div>
   
        <div class="grid_12">
              <div id="menu_mini" style="color:#FFF;width:5em;float:left;text-align:center;background-color:#062A51;cursor:pointer;border-radius:2px;margin-top:5px;font-family: 'Exo 2', sans-serif;">
                &#9776; Menu
              </div>
              <div style="position:relative;display:block;float:right;">
                <img src="<?php echo base_url("public/img/SVG_share.svg"); ?>" style="float:left;cursor:pointer;"/>
                <img src="<?php echo base_url("public/img/SVG_facebook.svg"); ?>" style="float:left;margin-left:5px;cursor:pointer;"/>
                <img src="<?php echo base_url("public/img/SVG_mail.svg"); ?>" style="float:left;;margin-left:5px;cursor:pointer;" />
                  <div style="position:relative;float:right;margin-left:30px; ">
                    <span style="font-size:10pt;margin-top:7px;" class="subtitle" onclick="document.location='<?php echo site_url('lang'); ?>'">IND</span>
                    <span style="font-size:10pt;margin-top:7px;" class="subtitle">|</span>
                    <span style="font-size:10pt;margin-top:7px;" class="subtitle" onclick="document.location='<?php echo site_url('lang/en'); ?>'">ENG</span>
                    <br><br> <br>
            </div>
          </div>
        </div>   
      <div style="position:absolute;" class="menu_top" >  
      <div class="grid_12" id="list_menu_mini" style="display:none;background-image:url(<?php echo base_url("public/img/BG_Menu.png"); ?>);background-repeat:repeat;">
      <div style="padding:15px;">
            <a class="<?php echo (isset($page) && $page == "about" ? "menuSelected" : "menu"); ?>" href="<?php echo site_url("about"); ?>">\ ABOUT</a> 
            <hr style="border:#062A51 solid 0.5px;">
            <a class="menu" href="<?php echo site_url("sale"); ?>"><span>\ </span>FOR SALE</a><BR>
                <blockquote><a id="submenu_forsale1" class="menu" href="<?php echo site_url("sale/warehouse"); ?>"><span>\ </span>WAREHOUSE</a> </blockquote>
                <blockquote><a id="submenu_forsale2" class="menu" href="<?php echo site_url("sale/land"); ?>"><span>\ </span>LAND</a> </blockquote>

            <a 
              class="<?php echo (isset($page) && $page == "about" ? "menuSelected" : "menu"); ?>" 
              href="<?php echo site_url("about"); ?>"
            >
              <?php echo (isset($page) && $page == "about" ? "\\" : "<span>\ </span>"); ?>
              ABOUT
            </a> 
                    
            <hr style="border:#062A51 solid 0.5px;">
            <a class="menu" href="<?php echo site_url("lease"); ?>"><span>\ </span>FOR LEASE</a>
              <blockquote><a id="submenu_forsale1" class="menu" href="<?php echo site_url("lease/warehouse"); ?>"><span>\ </span>WAREHOUSE</a> </blockquote>
              <blockquote><a id="submenu_forsale2" class="menu" href="<?php echo site_url("lease/land"); ?>"><span>\ </span>LAND</a> </blockquote>
            <hr style="border:#062A51 solid 0.5px;">
            <a class="menu" href="<?php echo site_url("portfolio"); ?>"><span>\ </span>PORTOFOLIO</a>
            <hr style="border:#062A51 solid 0.5px;">
            <a class="menu" href="<?php echo site_url("contact"); ?>"><span>\ </span>CONTACT</a>
       </div>
     </div>
     </div>
    </div> 
    </div>
    <!-- end of menu_mobile -->  