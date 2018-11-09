    <!-- menu desktop -->
    <div class="container_12" id="menu_desktop" >
        <div class="grid_3">
          <a href="<?php echo site_url(""); ?>">
          <img src="<?php echo base_url("public/img/logo.png"); ?>" alt="Waringin Logo" class="nav_logo" />
          </a>        
        </div>
        <div class="grid_9">
          <table width="100%">
            <tr>
              <td align="right">

                <div class="menu_top nav_icon_container">

                  <a href="#" onclick="share2FB('http://waringinwarehouse.com/')">
                    <img src="<?php echo base_url("public/img/SVG_share.svg"); ?>" alt="Share" class="nav_icon" />
                  </a>
    <!-- <div class="fb-share-button" data-href="http://waringinwarehouse.com/" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwaringinwarehouse.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>               -->
                  <?php if (isset($cms["account-facebook"]) && $cms["account-facebook"] != "") { ?>
                  <a href="<?php echo $cms["account-facebook"]; ?>" target="new"><img src="<?php echo base_url("public/img/SVG_facebook.svg"); ?>" alt="Facebook" class="nav_icon" /></a>
                  <?php } ?>
                  <a href="mailto:<?php echo $cms["contact-email"]; ?>" target="new"><img src="<?php echo base_url("public/img/SVG_mail.svg"); ?>" alt="mail" class="nav_icon" /></a>
                </div>

              </td>
              <td width="22%">

                <div class="menu_top nav_icon_container">
                <a href="<?php echo site_url('lang'); ?>">
                <span class="subtitle nav_lang_text">IND</span> 
                </a>
                <span class="subtitle nav_lang_text">|</span> 
                <a href="<?php echo site_url('lang/en'); ?>">
                <span class="subtitle nav_lang_text">ENG</span>
                </a>
                </div>


              </td>
            </tr>
            <tr>
              <td colspan=2>

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
                <div id="menu_forsale_submenu" class="submenu_ nav_submenu_padleft">
                  <div class="submenu_child_" >
                    <a class="headline nav_submenu_text" href="<?php echo site_url("sale/warehouse"); ?>">WAREHOUSE</a>
                    <hr class="nav_hr" />
                    <a class="headline nav_submenu_text" href="<?php echo site_url("sale/land"); ?>">LAND</a>
                    <div class="nav_submenu_pad">&nbsp;</div>
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
                <div id="menu_forlease_submenu" class="submenu_ nav_submenu_padleft">
                    <div class="submenu_child_">
                        <a class="headline nav_submenu_text" href="<?php echo site_url("lease/warehouse"); ?>" >WAREHOUSE</a>
                        <hr class="nav_hr" />
                        <a class="headline nav_submenu_text" href="<?php echo site_url("lease/land"); ?>">LAND</a>
                        <div class="nav_submenu_pad">&nbsp;</div>
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
                  class="<?php echo (isset($page) && $page == "article" ? "menuSelected" : "menu"); ?> nodisplay" 
                  href="<?php echo site_url("article"); ?>"                  
                >
                  <?php echo (isset($page) && $page == "article" ? "\\" : "<span>\ </span>"); ?>
                  ARTICLE
                </a>  
                <a 
                  class="<?php echo (isset($page) && $page == "contact" ? "menuSelected" : "menu"); ?>" 
                  href="<?php echo site_url("contact"); ?>"
                >
                  <?php echo (isset($page) && $page == "contact" ? "\\" : "<span>\ </span>"); ?>
                  CONTACT
                </a>
              </div>


              </td>
            </tr>
          </table>
        </div>
    </div><!-- end of menu_desktop -->    


    
    <!-- menu_mobile -->  
    <div class="nav_header_mobile" id="menu_mobile">
    <div class="container_12" >
        <div class="grid_12 text-center">
          <a href="<?php echo site_url(""); ?>">
            <img src="<?php echo base_url("public/img/logo.png"); ?>" class="nav_logo"  alt="logo" />
          </a>             
        </div>
   
        <div class="grid_12">
              <div id="menu_mini" class="nav_menu_mobile">
                &#9776; Menu
              </div>
              <div class="nav_icon_container">
              
                <a href="#" onclick="share2FB('http://waringinwarehouse.com/')">
                  <img src="<?php echo base_url("public/img/SVG_share.svg"); ?>" class="nav_icon" alt="Share" />
                </a>

                <?php if (isset($cms["account-facebook"]) && $cms["account-facebook"] != "") { ?>
                <a href="<?php echo $cms["account-facebook"]; ?>" target="new">
                <img src="<?php echo base_url("public/img/SVG_facebook.svg"); ?>" class="nav_icon" alt="Facebook"/></a>
                <?php } ?>
                <a href="mailto:<?php echo $cms["contact-email"]; ?>" target="new">
                <img src="<?php echo base_url("public/img/SVG_mail.svg"); ?>" class="nav_icon" alt="mail" /></a>
                <div class="nav_icon_container mobile">
                  <a href="<?php echo site_url('lang'); ?>">
                    <span class="subtitle nav_lang_text">IND</span>
                  </a>
                  <span class="subtitle nav_lang_text">|</span>
                  <a href="<?php echo site_url('lang/en'); ?>">
                    <span class="subtitle nav_lang_text">ENG</span>
                  </a>
                  <br><br> <br>
            </div>
          </div>
        </div>   
      <div class="menu_top absolute" >
      <div class="grid_12 nodisplay nav_menu_container_mobile" id="list_menu_mini">
        <a class="<?php echo (isset($page) && $page == "about" ? "menuSelected" : "menu"); ?>" href="<?php echo site_url("about"); ?>">\ ABOUT</a> 
        <hr class="nav_hr_mobile">
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
                
        <hr class="nav_hr_mobile">
        <a class="menu" href="<?php echo site_url("lease"); ?>"><span>\ </span>FOR LEASE</a>
          <blockquote><a id="submenu_forsale1" class="menu" href="<?php echo site_url("lease/warehouse"); ?>"><span>\ </span>WAREHOUSE</a> </blockquote>
          <blockquote><a id="submenu_forsale2" class="menu" href="<?php echo site_url("lease/land"); ?>"><span>\ </span>LAND</a> </blockquote>
        <hr class="nav_hr_mobile">
        <a class="menu" href="<?php echo site_url("portfolio"); ?>"><span>\ </span>PORTOFOLIO</a>
        <hr class="nav_hr_mobile">
        <a class="menu" href="<?php echo site_url("contact"); ?>"><span>\ </span>CONTACT</a>
     </div>
     </div>
    </div> 
    </div>
    <!-- end of menu_mobile -->  