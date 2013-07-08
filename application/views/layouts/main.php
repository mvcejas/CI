<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?=$page_title;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<link href="<?=assets_url();?>css/bootstrap.css" rel="stylesheet">
<link href="<?=assets_url();?>css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?=assets_url();?>css/style.css" rel="stylesheet">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>	
<header  class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      
      <div class="nav-collapse collapse pull-right">
        <ul class="nav nav-pills">
          <li <?=current_url()==site_url() ? 'class="active"' : null;?>>
          	<a href="<?=base_url();?>">Home</a>
          </li>
          <li <?=current_url()==site_url('add-business') ? 'class="active"' : null;?>>
          	<a href="<?=base_url('add-business');?>">Add Your Business</a>
          </li>         
        </ul>     
      </div><!--/.nav-collapse-->
    </div>
  </div>
  <br>
</header>

<div class="container">
  <?=$this->load->view($template);?>
</div>

<hr>
<footer class="footer">
  <div class="container">
    <p>Footer</p>
  </div>
</footer>

<script src="<?=assets_url();?>js/jquery.js"></script>
<script src="<?=assets_url();?>js/bootstrap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(-34.397, 150.644),
    zoom: 8,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("map_canvas"),mapOptions);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>