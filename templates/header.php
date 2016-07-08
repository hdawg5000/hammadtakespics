<?php
    if(!isset($_SESSION)) { 
        session_start(); 
    }
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Bootstrap -->
        <!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- LightGallery CSS -->
        <link type="text/css" rel="stylesheet" href="css/lightgallery.css" />
        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/b9dd0c1c41.js"></script>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!-- LightGallery JS -->
        <script src="js/lightgallery.js"></script>
        <script src="js/lg-thumbnail.js"></script>
        <script src="js/lg-fullscreen.js"></script>
        <!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <title>
            <?php
                if (defined('TITLE')) {
                    print TITLE;
                } else {
                    print 'Hammad Photography';
                }
            ?>
        </title>
    </head>

    <body>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a href="/"><img id="logo" src="images/logo3.PNG"></a>
                    <!--          <a class="navbar-brand" href="#">Hammad Takes Pics</a>--></div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-center">
                        <li><a href="/"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a></li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp; Albums <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <!--             	<li class="dropdown-header">Admin & Dashboard</li>-->
                                <li><a href="album/italy">Italy</a></li>
                                <li><a href="album/turkey">Turkey</a></li>
                                <li><a href="album/dubai">Dubai - Coming soon!</a></li>
                                <li class="divider"></li>
                                <li><a href="albums">See all</a></li>
                            </ul>
                        </li>
                        <?php
                if (isset($_SESSION['email'])) {
                    print '<li><a href="logout" /><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; Logout</a></li>
                    <li><a href="manage_account" /><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp; Manage Account</a></li>';
                } else {
                    print '<li><a href="login"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Login</a></li>';
                }
            ?>
                            <li><a href="contact"><i class="fa fa-paper-plane fa-fw" aria-hidden="true"></i>&nbsp; Contact</a></li>
                            <li><a href="about"><i class="fa fa-user"></i>&nbsp; About</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $(".dropdown-toggle").dropdown();
            });
        </script>