<?php

    define('TITLE', 'Manage Account | Hammad Takes Pics');
    include('templates/header.php');

    print '<div id="manage_account"><h1 class="page_title">Manage Account</h1>';

    $dbc = mysqli_connect('104.236.232.6', 'web', 'GNxhwJs6V75UVMyq');
    mysqli_select_db($dbc,'users');

    $q = 'SELECT * FROM users';

    if ($r = mysqli_query($dbc, $q)) {
        while ($row = mysqli_fetch_array($r)) {
            //If username inputted exists, set $user_exists to true
            if ($row['email'] == $_SESSION['email']) {
                print '<div id="manage_account_display"><p><b>Name </b>' . $row['first_name'] . ' ' . $row['last_name'] .  '</p>
                <p><b>Email </b>' . $row['email'] . '</p>
                <p><b>Password </b><a href="change_password">Change</a></p>
                <p><b>Upload a display picture (optional)</b><input type="file" name="display_pic"></p></div>';
            }
        }
    }   

    print '</div>';
    //Close connection to database
    mysqli_close($dbc);
    
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