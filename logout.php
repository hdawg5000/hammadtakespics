<?php
    define('TITLE', 'Hammad Photography | Logout Successful');
    include('templates/header.php');

    if(!isset($_SESSION)) { 
        session_start(); 
    }

    if(empty($_SESSION['email'])) {
        print '<div id="register_form"><img src="images/error.png"><h1>Oops!</h1><p id="error">You are already logged out!</p></div>';

        header("Refresh:4; url=index.php");
    } else {
        //Destroy session
        $_SESSION = array();
        session_destroy();

        print '<div id="register_form"><img src="images/success.png"><h1>Thanks for stopping by!</h1><p id="success">You have been successfully logged off. Redirecting you in 3..2..1..</p></div>';

        header("Refresh:4; url=index");   
    }
    include('templates/footer.php');
?>