<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="143806303975-s19ihl8pr7rlsl8qmsesfgoutdkaj9ii.apps.googleusercontent.com">

<?php
    define('TITLE','Create Account | Hammad Takes Pics');
    include('templates/header.php');

    if (!empty($_SESSION['email'])) {
        print '<div id="register_form"><h1>Oops!</h1><p id="error">Please <a href="logout.php">logout</a> before creating a new account.</p></div>';

        header("Refresh:4; url=index.php");

    } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        //Check form
        if(!empty($_POST['email']) && (!empty($_POST['password'])) && (!empty($_POST['confirm_password'])) && (!empty($_POST['first_name'])) && (!empty($_POST['last_name'])) && ($_POST['password'] == $_POST['confirm_password'])) {
            
            //Connect to the database
            $dbc = mysqli_connect('104.236.232.6', 'web', 'GNxhwJs6V75UVMyq');
            mysqli_select_db($dbc, 'users');
            
//            $dbc = mysqli_connect('localhost', 'web_user', 'web');
//            mysqli_select_db($dbc,'fanclub');
        
            $q = 'SELECT * FROM users';
            
            $user_exists = FALSE;

            //Check is username already exists in the database
            if ($r = mysqli_query($dbc, $q)) {
                while ($row = mysqli_fetch_array($r)) {
                    if ($row['email'] == $_POST['email']) {
                        $user_exists = TRUE;
                        print '<div id="register_form"><img src="images/error.png"><h1>Oops!</h1><p id="error">This username already exists! Please login using the <a href="login.php">login page</a></p>';
                        break;
                    }
                }
            }

            if (!$user_exists) {
                $email = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['email'])));
                $password = mysqli_real_escape_string($dbc, trim(strip_tags(md5(trim($_POST['password'])))));
                $first_name = mysqli_real_escape_string($dbc, trim(strip_tags(ucfirst($_POST['first_name']))));
                $last_name = mysqli_real_escape_string($dbc, trim(strip_tags(ucfirst($_POST['last_name']))));
                
                $query = "INSERT INTO users (id, password, status, admin, first_name, last_name, email) VALUES ('', '$password', 'OPEN', 'N', '$first_name', '$last_name', '$email')";
//                $query = "INSERT INTO users (password, user_dir, status, admin, first_name, last_name, email) VALUES ('$password', 'blah', 'OPEN', 'N', '$first_name', '$last_name', '$email')";
                
//                mkdir('../users/' . $_POST["username"], 0777);
                
                if (@mysqli_query($dbc, $query)) {
                    print '<div id="register_form"><img src="images/success.png"><h1>Welcome, ' . $first_name . '.</h1><p id="success">You have successfully been registered! Click <a href="login.php">here</a> to login.</p></div>';
                } else {
                    print '<div id="register_form"><img src="images/error.png"><h1>Oops!</h1><p>An error occurred! ' . mysqli_error($dbc) . '</p>';
                }
                
                //Close connection to database
                mysqli_close($dbc);
            }     
            
        } else if ($_POST['password'] !== $_POST['confirm_password']) {
                print '<div id="register_form"><img src="images/error.png"><h1>Oops!</h1><p id="error">Passwords do not match!</p></div>';
        } else {
                print '<div id="register_form"><img src="images/error.png"><h1>Oops!</h1><p id="error">Please enter a valid username and password!</p></div>';
        }
        
        
    } else {
        print '<div id="register_form"><h1 class="page_title">Create Account</h1><p>Create an account to interact with others, comment on pictures and to contact us</p>
        <form action="create_account.php" method="post">
        <p id="label">First Name <input type="text" name="first_name" required></p>
        <p>Last Name <input type="text" name="last_name" required></p>
        <p>Email <input type="email" name="email" required></p>
        <p>Password <input type="password" name="password"></p>
        <p>Confirm password <input type="password" name="confirm_password"></p>
        <input type="submit" value="Create Account" id="submit">
        <span class="g-signin2" data-onsuccess="onSignIn"></span>
        <p>Already registered? Login <span id="redirect_link"><a href="login">here</a></span></form></div>';
    }
    include('templates/footer.php');
?>