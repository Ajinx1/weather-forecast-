<?php 
$latitude = 9.0820;
$longitude = 8.6753;
require 'php/api.php';
date_default_timezone_set($tz);
$activePage = "9ja";
?>

<!DOCTYPE html>
<html lang="en">

<!-- HEADER -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link rel="icon" type="image/png" sizes="192x192"  href="css/fav-icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="css/fav-icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="css/fav-icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="css/fav-icons/favicon-16x16.png">

  <title>Nigeria Weather Portal</title>

  <!-- Bootstrap core CSS -->
  <link href="css/boot.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.5/css/weather-icons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

  <!-- Custom styles -->
  <link href="css/nn.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script>
    var x = document.getElementById("body");
    function getLocation()
    {
      if (navigator.geolocation)
      {
        navigator.geolocation.getCurrentPosition(bindPosition);
      }
      else {
        x.innerHTML = "Geolocation is not supported by this browser.";
      }
    }
    function bindPosition(position) {
      $("input[name='latitude']").val(position.coords.latitude);
      $("input[name='longitude']").val(position.coords.longitude);
    }
  </script>

</head>

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
            <nav id="sidebar">
                <div class="sidebar-header">
				<h3><img src="img/flag.png" width="120" height="120"/></h3>
                    <h3>Nigeria Aviation Weather Portal</h3>
					<strong><img src="img/flag.png" width="50" height="50"/></strong>
                    <strong>NW</strong>
                </div>

                <ul class="list-unstyled components">
                    <li <?php if ($activePage == "9ja") {?> class="active" <?php } ?>><a href="index.php"><i class="glyphicon glyphicon-globe"></i>Nigeria</a></li>
			

					<li <?php if ($activePage == "gh") {?> class="" <?php } ?>><a href="ghana.php"><i class="glyphicon glyphicon-globe"></i>Ghana</a></li>
			
					<li <?php if ($activePage == "us") {?> class="" <?php } ?>><a href="us.php"><i class="glyphicon glyphicon-globe"></i>United state</a></li>
			
					<li <?php if ($activePage == "uk") {?> class="" <?php } ?>><a href="uk.php"><i class="glyphicon glyphicon-globe"></i>United kingdom</a></li>
					
			        <li <?php if ($activePage == "china") {?> class="" <?php } ?>><a href="china.php"><i class="glyphicon glyphicon-globe"></i>China</a></li>
			
					<li <?php if ($activePage == "can") {?> class="" <?php } ?>><a href="canada.php"><i class="glyphicon glyphicon-globe"></i>Canada</a></li>
					
                </ul>

            </nav>

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
								<li><a href="lagos.php" id="bot"><button>Lagos</button></a></li>
								<li><a href="abuja.php" id="bot"><button>Abuja</button></a></li>
								<li><a href="akure.php" id="bot"><button>Akure</button></a></li>
								<li><a href="kaduna.php" id="bot"><button>Kaduna</button></a></li>
								<li><a href="sokoto.php" id="bot"><button>Sokoto</button></a></li>
								<li><a href="kano.php" id="bot"><button>kano</button></a></li>
								<li><a href="ph.php" id="bot"><button>Portharcourt</button></a></li>
                                <li><a href="#"<i class="fa fa-clock-o"></i> <?php echo date("g:i a | l, F j", $curTime); ?></a></li>
      
                            </ul>

                        </div>


                    </div>
                </nav>
     <div class="container-fluid">

      <div class="row">
      <h3 class="ml-15 text-info">Nigeria, NG</small></h3>
        <?php require 'partials/part_current.php' ?>
        <?php require 'partials/part_today.php' ?>

      </div>

      <?php require 'partials/part_hourly.php' ?>

      <?php require 'partials/part_daily.php' ?>

    </div>

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
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
			 
			 $(".modal-trigger").click(function(e){
				  e.preventDefault();
				  dataModal = $(this).attr("data-modal");
				  $("#" + dataModal).css({"display":"block"});
				  // $("body").css({"overflow-y": "hidden"}); //Prevent double scrollbar.
				});

				$(".close-modal, .modal-sandbox").click(function(){
				  $(".modal").css({"display":"none"});
				  // $("body").css({"overflow-y": "auto"}); //Prevent double scrollbar.
				});
         </script>
		 
 

  </body>
</html>
