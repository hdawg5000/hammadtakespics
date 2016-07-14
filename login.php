<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="143806303975-s19ihl8pr7rlsl8qmsesfgoutdkaj9ii.apps.googleusercontent.com">
<?php
    define('TITLE', 'Login | Hammad Takes Pics');
    include('templates/header.php');

    if(!isset($_SESSION)) { 
        session_start(); 
    }

    error_reporting(E_ALL);
    // I don't know if you need to wrap the 1 inside of double quotes.
    ini_set("display_startup_errors",1);
    ini_set("display_errors",1);

    if (!empty($_SESSION['email'])) {
        print '<div id="register_form"><img src="images/error.png"><h1 >Oops!</h1><p id="error">You are already logged in!</p></div>';

        header("Refresh:4; url=index.php");
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ((!empty($_POST['email'])) && (!empty($_POST['password']))) {

            $dbc = mysqli_connect('104.236.232.6', 'web', 'GNxhwJs6V75UVMyq');
            mysqli_select_db($dbc,'users');

//            $dbc = mysqli_connect('localhost', 'web_user', 'web');
//            mysqli_select_db($dbc,'fanclub');

            $q = 'SELECT * FROM users';

            $user_exists = FALSE;

            //Check if user exists
            if ($r = mysqli_query($dbc, $q)) {
                while ($row = mysqli_fetch_array($r)) {
                    //If username inputted exists, set $user_exists to true
                    if ($row['email'] == $_POST['email']) {
                        $user_exists = TRUE;
                        //If passwords match, start session cookie
                        if (($row['password'] == md5($_POST['password'])) && ($row['status'] == 'OPEN')) {
                            if(!isset($_SESSION)) { 
                                session_start(); 
                            }
                            $_SESSION['email'] = $_POST['email'];
                            print '<div id="register_form"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span></div>';
//                            print '<div id="register_form"><img src="images/success.png"><h1>Yay!</h1><p id="success">You have successfully logged in!</p></div>';
                            header("Refresh:0; url=/");
                            break;    
                        } else if ($row['status'] == 'CLOSED') {
                            print '<div id="register_form"><img src="images/error.png"><h1>Oops!</h1><p id="error">Your account has been suspended! Please contact us for more information.</p></div>';
                            break;
                        } else {
                            print '<div id="register_form"><img src="images/error.png"><h1>Oops!</h1><p id="error">Username or password is incorrect! Please <a href="login.php">try again.</a></p></div>';
                            break;
                        }
                    }
                }
            }   

            //If user doesn't exist, display error
            if (!$user_exists) {
                print '<div id="register_form"><img src="images/error.png"><h1>Oops!</h1><p id="error">Username does not exist! Please register <a href="create_account.php">here</a></p></div>';
            }

            //Close connection to database
            mysqli_close($dbc);
        } else {
            print '<div id="register_form"><img src="images/error.png><h1>Oops!</h1><p id="error">You must enter a valid username and password!</p><p><a href="login.php">Go back</a></p></div>';
        }
        
    } else {
        print '<div id="login_form"><h1 class="page_title">Login</h1><p>Log in to interact with others, comment on pictures, manage your account and to contact us</p><form action="login.php" method="post">
        <p>Email <input type="text" name="email"></p>
        <p>Password <input type="password" name="password"></p>
        <input type="submit" name="submit" id="submit" value="Login">
        <span id="google"><div class="g-signin2" data-onsuccess="onSignIn"></span></div>
        <p>Need to register? <span id="redirect_link"><a href="create_account">Create account</a></span></div>';
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
    </body>

    </html>
    <link rel="stylesheet" href="album/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="album/css/style.css" type="text/css" />