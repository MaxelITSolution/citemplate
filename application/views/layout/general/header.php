<header>
  <div class="banner-outer">
    <a href="./"><?php echo HTML::img(array("class"=>"banner-logo","src"=>"banner-stts.png","width"=>"500px")); ?></a>
    <div class="search" style="color:white;width:500px;text-align:right;">      
      <?php if (isset($_SESSION[_SESSION_ROLE]) && $_SESSION[_SESSION_ROLE] != "") { ?>
        <?php echo $_SESSION[_SESSION_NAME]; ?> [<?php echo $_SESSION[_SESSION_USER]; ?>] &nbsp; &nbsp;
        <input type="button" value="Logout" class="btn-search" id="btn-logout" onclick="document.location='_logout'">
        <?php } else { ?>
        <input type="button" value="Login" class="btn-search" id="btn-login">
<!--        <input type="button" value="Search" class="btn-search" id="btn-search">-->
<!--        <input type="text" size="20" class="text-search">-->
        <?php } ?>
    </div>
  </div>
</header>