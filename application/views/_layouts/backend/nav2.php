    <ul id="slide-out" class="side-nav blue white-text">
      <li class="no-padding">
        
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Master<i class="fa fa-angle-down"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">Barang</a></li>
                <li><a href="#!">Lokasi</a></li>
              </ul>
            </div>            
          </li>
          <li>
            <a class="collapsible-header">CMS<i class="fa fa-angle-down"></i></a>
            <div class="collapsible-body">
              <ul>
              </ul>
            </div>            
          </li>
          <li>
            <a class="collapsible-header">Setting</a>
          </li>
        </ul>
      </li>
    </ul>
    <ul class="left hide-on-med-and-down">
      <li>
        <a class="collapsible-header">Master<i class=""></i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="#!">Barang</a></li>
            <li><a href="#!">Lokasi</a></li>
          </ul>
        </div>            
      </li>
      <li><a href="#!">First Sidebar Link</a></li>

      <li onclick="$('#dropdown_master').slideToggle();">
        Master<i class="fa fa-angle-down right"></i>
      </li>
      <ul id='dropdown_master'>
        <li><a href="#!">Barang</a></li>
        <li><a href="#!">Lokasi</a></li>
      </ul>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
 
<script>
  // Initialize collapse button

  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
    }
  );  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();

  // Show sideNav
  //$('.button-collapse').sideNav('show');
  // Hide sideNav
  //$('.button-collapse').sideNav('hide');
  // Destroy sideNav
  //$('.button-collapse').sideNav('destroy');

</script>