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

    include('templates/footer.php');
    
?>