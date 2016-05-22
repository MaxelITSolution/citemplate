<nav>
<?php
  if (isset($_SESSION[_SESSION_ROLE]) && $_SESSION[_SESSION_ROLE] != "") {
	  $nama = $_SESSION[_SESSION_ROLE];
    switch ($_SESSION[_SESSION_ROLE]) {
      case "MHS" : { $nama = "Mahasiswa"; break; }
      case "ALUMNI" : { $nama = "Alumni"; break; }
      case "COMPANY" : { $nama = "Mitra Kerja"; break; }
      case "ADMIN" : { $nama = "Administrator"; break; }
    }
    ?>
    
    <a href="./_profile" onclick="navigate('./_profile');">
      <div class="submenu2">
        <p align="center"><?php echo $nama; ?></p>
      </div>      
    </a>
    
    <?php foreach($_SESSION[_SESSION_MENU] as $name=>$url) { ?>
      <a href="./<?php echo $url; ?>" onclick="navigate('./<?php echo $url; ?>'); return false;">
        <div class="submenu"><?php echo $name; ?></div>
      </a>
    <?php } 
  } else { ?>
    <div class="banner-left"> 
    <?php echo HTML::img(array("src"=>"banner-left.jpg")); ?>
    </div>
  <?php } ?>
</nav>