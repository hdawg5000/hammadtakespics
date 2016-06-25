<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="143806303975-s19ihl8pr7rlsl8qmsesfgoutdkaj9ii.apps.googleusercontent.com">
<?php
    define('TITLE', 'Hammad Photography | Login');
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
                            print '<div id="register_form"><img src="images/success.png"><h1>Yay!</h1><p id="success">You have successfully logged in!</p></div>';
                            header("Refresh:2; url=index.php");
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
    include('templates/footer.php');
?>

