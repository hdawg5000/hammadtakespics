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
    include('templates/footer.php');
?>
<link rel="stylesheet" href="album/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="album/css/style.css" type="text/css" />