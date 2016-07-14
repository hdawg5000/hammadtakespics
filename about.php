<?php
    define('TITLE', 'About | Hammad Takes Pics');
    include('album/templates/header.php');
    
    if(!isset($_SESSION)) { 
        session_start(); 
    }

?>

    <div id="about_me">
        <h1 class="page_title">About me</h1>
        <p>Coming soon...</p>
        <img width="300" height="300" src="img/display.jpg">
    </div>

    <!-- Start of footer -->
    <div class="navbar navbar-default navbar-bottom navbar-fixed-bottom" role="navigation">
        <div class="container">
            <div class="navbar-text pull-right">
                <p>&copy 2016 Hammad Takes Pics</p> <a href="https://www.facebook.com/hammadtakespics/" target="_blank"><i class="foot fa fa-facebook-square fa-3x"></i></a> <a href="#" target="_blank"><i class="foot fa fa-google-plus-official fa-3x"></i></a> <a href="https://www.instagram.com/hammadtakespics/" target="_blank"><i class="foot fa fa-instagram fa-3x"></i></a> <a href="https://twitter.com/hammadtakespics" target="_blank"><i class="foot fa fa-twitter fa-3x"></i></a> <a href="https://www.youtube.com/channel/UCVQwzp1Qpr2FONc5DJS2agg" target="_blank"><i class="foot fa fa-youtube-play fa-3x"></i></a>
            </div>
        </div>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



    <script src="js/active.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="js/active.js"></script>
    <link rel="stylesheet" href="album/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="album/css/style.css" type="text/css" />
    </body>

    </html>