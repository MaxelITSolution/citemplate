  <section id="leftbar">
    <div class="leftbar_row">
      <img alt="brand" src="<?php echo base_url('public/img/logo.png'); ?>" width="150px">
    </div>
    <a href="<?php echo site_url('backend/tempat'); ?>">
      <div class="leftbar_menu">
        Master Tempat
      </div>
    </a>
    <a href="<?php echo site_url('backend/lokasi'); ?>">
      <div class="leftbar_menu">
        Master Lokasi
      </div>
    </a>
    <a href="<?php echo site_url('backend/portfolio'); ?>">
      <div class="leftbar_menu">
        Master Portfolio
      </div>
    </a>
    <a href="<?php echo site_url('backend/kantor'); ?>">
      <div class="leftbar_menu">
        Master Kantor
      </div>
    </a>
    <a href="<?php echo site_url('backend/article'); ?>">
      <div class="leftbar_menu">
        Article
      </div>
    </a>
    <a href="<?php echo site_url('backend/image'); ?>">
      <div class="leftbar_menu">
        Banner Image
      </div>
    </a>
    <a href="<?php echo site_url('backend/cms'); ?>">
      <div class="leftbar_menu">
        Content Management
      </div>
    </a>
    <a href="<?php echo site_url('backend/setting'); ?>"> 
      <div class="leftbar_menu">
        Setting
      </div>
    </a>
    <div class="leftbar_row" style="text-align: center;">
      <a href="<?php echo site_url('logout'); ?>">
      <button type="button" class="btn btn-danger navbar-btn">
        Logout
        <i class="fa fa-sign-out"></i>
      </button>
      </a>
    </div>
  </section>
