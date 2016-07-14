<?php
    define('TITLE', 'Logout | Hammad Takes Pics');
    include('templates/header.php');

    if(!isset($_SESSION)) { 
        session_start(); 
    }

    if(empty($_SESSION['email'])) {
        print '<div id="register_form"><img src="images/error.png"><h1>Oops!</h1><p id="error">You are already logged out!</p></div>';

        header("Refresh:0; url=index");
    } else {
        //Destroy session
        $_SESSION = array();
        session_destroy();
        
        print '<div id="register_form"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span></div>';

//        print '<div id="register_form"><img src="images/success.png"><h1>Thanks for stopping by!</h1><p id="success">You have been successfully logged off. Redirecting you in 3..2..1..</p></div>';

        header("Refresh:0; url=index");   
    } 
?>
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
    <link rel="stylesheet" href="album/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="album/css/style.css" type="text/css" />