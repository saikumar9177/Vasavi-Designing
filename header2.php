<!DOCTYPE html>
<html lang="en" ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>VASAVI BUILDERS</title>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/autocomplete.css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" type="text/css" href="vasavihome.css">
    <link rel="stylesheet" type="text/css" href="css/accordion.css">
    <link rel="stylesheet" type="text/css" href="main.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
      $(document).ready(function(){       
         var scroll_start = 0;
         var startchange = $('#startchange');
         var offset = startchange.offset();
         $(document).scroll(function() { 
            scroll_start = $(this).scrollTop();
            if(scroll_start > offset.top) {
                $('#navbar1').css('background-color', '#067E14');
             } else {
                $('#navbar1').css('background-color', 'transparent');
             }
         });
      });
    </script>

  </head>
  <body>

    <div class="container-fluid topbar">
      <div class="row top_fixed" id="navbar1" style="background-color: #067E14;">
        <div class="container">
          <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
            <div id="wrapper">
              <div class="overlay"></div>
                <!-- Sidebar -->
                <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" >
                  <ul class="nav sidebar-nav">
                    
                    <li> <a href="index.php"> HOME</a> </li>
                    <li> <a href="about.php"> ABOUT US</a> </li>
                    <li> <a href="#"> COMMITTEE</a> </li>
                    <li> <a href="#">PROPERTY SEARCH</a> </li>
                    <li> <a href="#">CONTACT US</a> </li>
                  </ul>
                </nav>
                <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
                <span class="logo">
                  <a href="#" class="name" style="margin-left:20px;">
                  <img src="img/vasavilogo.png">
                  </a>
                </span>
            </button>
              </div>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 hidden-xs">
          <ul class="social">
            <li>
              <a href="#" class="vasavi_social_btn facebook">
                <span class="social_icon">
                  <i class="fa fa-facebook"></i>
                </span> 
                Share on Facebook
              </a>
            </li>
            <li>
              <a href="#" class="vasavi_social_btn twitter">
                <span class="social_icon">
                  <i class="fa fa-twitter"></i>
                </span>
                Twitter
              </a>
            </li>
            <li>
              <a href="#" class="vasavi_social_btn google">
                <span class="social_icon">
                  <i class="fa fa-google-plus"></i>
                </span> 
                Share on Google+
              </a>
            </li>
          </ul>
          </div>
        </div>

      </div>
      
    </div>

    





    

      




    