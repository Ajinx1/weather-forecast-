<?php 
$latitude = 55.3781;
$longitude = 3.4360;
require 'php/api.php';
date_default_timezone_set($tz);
$activePage = "uk";
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
                    <li <?php if ($activePage == "9ja") {?> class="" <?php } ?>><a href="index.php"><i class="glyphicon glyphicon-globe"></i>Nigeria</a></li>
			

					<li <?php if ($activePage == "gh") {?> class="" <?php } ?>><a href="ghana.php"><i class="glyphicon glyphicon-globe"></i>Ghana</a></li>
			
					<li <?php if ($activePage == "us") {?> class="" <?php } ?>><a href="us.php"><i class="glyphicon glyphicon-globe"></i>United state</a></li>
			
					<li <?php if ($activePage == "uk") {?> class="active" <?php } ?>><a href="uk.php"><i class="glyphicon glyphicon-globe"></i>United kingdom</a></li>
					
			        <li <?php if ($activePage == "china") {?> class="" <?php } ?>><a href="china.php"><i class="glyphicon glyphicon-globe"></i>China</a></li>
			
					<li <?php if ($activePage == "can") {?> class="" <?php } ?>><a href="canada.php"><i class="glyphicon glyphicon-globe"></i>Canada</a></li>
					
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
                                <li><a href="#"><i class="fa fa-clock-o"></i> <?php echo date("g:i a | l, F j", $curTime); ?></a></li> <!-- forecast time -->
      
                            </ul>
                        </div>

                    </div>
                </nav>
     <div class="container-fluid">

      <div class="row">
      <h3 class="ml-15 text-info">United kingdom, Uk</small></h3>
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