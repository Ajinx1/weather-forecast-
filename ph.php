<?php 
$latitude = 4.8156;
$longitude = 7.0498;
require 'php/api.php';
date_default_timezone_set($tz);
$activePage = "ph";
?>

<!DOCTYPE html>
<html lang="en">

<!-- HEADER -->
<?php require 'partials/part_header.php' ?>

  <body onload="getLocation()">
  <div id="emptycontainer">
<div class="empty">
<div class="logo">
<img src="img/wt.png" height="120" width="120"/>
</div>
<div class="logo1">
<p>Nigeria Weather Forecast Portal</p>
</div>
</div>
</div>

<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
				<h3><img src="img/flag.png" width="120" height="120"/></h3>
                    <h3>Nigeria Aviation Weather Portal</h3>
					<strong><img src="img/flag.png" width="50" height="50"/></strong>
                    <strong>NW</strong>
                </div>

                <ul class="list-unstyled components">
                    <li <?php if ($activePage == "lag") {?> class="" <?php } ?>><a href="lagos.php"><i class="glyphicon glyphicon-globe"></i>Lagos</a></li>
			

					<li <?php if ($activePage == "abj") {?> class="" <?php } ?>><a href="abuja.php"><i class="glyphicon glyphicon-globe"></i>Abuja</a></li>
			
					<li <?php if ($activePage == "aku") {?> class="" <?php } ?>><a href="akure.php"><i class="glyphicon glyphicon-globe"></i>Akure</a></li>
			
					<li <?php if ($activePage == "kad") {?> class="" <?php } ?>><a href="kaduna.php"><i class="glyphicon glyphicon-globe"></i>Kaduna</a></li>
					
			        <li <?php if ($activePage == "sok") {?> class="" <?php } ?>><a href="sokoto.php"><i class="glyphicon glyphicon-globe"></i>Sokoto</a></li>
			
					<li <?php if ($activePage == "kn") {?> class="" <?php } ?>><a href="kano.php"><i class="glyphicon glyphicon-globe"></i>Kano</a></li>
					
					<li <?php if ($activePage == "ph") {?> class="active" <?php } ?>><a href="ph.php"><i class="glyphicon glyphicon-globe"></i>Port Harcourt</a></li>
                </ul>

            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                            </button>
					
                        </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						
                            <ul class="nav navbar-nav navbar-right">
							    <li><a href="index.php" id="goo"><i class="glyphicon glyphicon-home"></i></a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i> <?php echo date("g:i a | l, F j", $curTime); ?></a></li> <!-- forecast time -->
      
                            </ul>
                        </div>

                    </div>
                </nav>
     <div class="container-fluid">

      <div class="row">
      <h3 class="ml-15 text-info">Port Harcourt, PH</small></h3>
        <!-- CURRENT CONDITIONS -->
        <?php require 'partials/part_current.php' ?>

        <!-- TODAY FORECAST -->
        <?php require 'partials/part_today.php' ?>

      </div> <!-- /row -->

      <!-- HOURLY -->
      <?php require 'partials/part_hourly.php' ?>

      <!-- WEEK FORECAST -->
      <?php require 'partials/part_daily.php' ?>

    </div> <!-- /container -->


    <?php require 'partials/part_footer.php' ?>

                  </div>
 </div>

<div id="ss_menu">
  <div> <a target="_blank" href="lagos.php"><i class="glyphicon glyphicon-globe"></i></a> <span>Lagos
  </span></div>
  
  <div> <a target="_blank" href="ph.php"><i class="glyphicon glyphicon-globe"></i></a> <span>Port<br>
    Harcourt</span></div>
    <div> <a target="_blank" href="akure.php"><i class="glyphicon glyphicon-globe"></i></a> <span>Akure
    </span></div>
     <div> <a target="_blank" href="kano.php"><i class="glyphicon glyphicon-globe" aria-hidden="true"></i> </a> <span>Kano
    </span></div>
  <div> <a target="_blank" href="kaduna.php"><i class="glyphicon glyphicon-globe" aria-hidden="true"></i></a> <span>Kaduna
   </span></div>
  <div class="menu_check">
    <div class="share" id="ss_toggle" data-rot="180"> <img src="img/add.png" width="" class="img-responsive" id="btt" alt="" />
      <div class="bar"></div>
    </div>
  </div>
</div>

<script src="js/jquery-3.1.1.min.js"></script> 
<script>
$('#ss_toggle').on('click', function(ev) {
	$('body').toggleClass('shadow_bg');
	$(this).parents('#ss_menu').toggleClass('activated');
  });
</script>



        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>

  </body>
</html>