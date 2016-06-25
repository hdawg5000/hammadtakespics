<?php
    if(!isset($_SESSION)) { 
        session_start(); 
    }
?>
    <head>
        <meta http-equiv="imagetoolbar" content="no" charset="utf-8" />
        <title>
            <?php
                if (defined('TITLE')) {
                    print TITLE;
                } else {
                    print 'Hammad Photography';
                }
            ?>
        </title>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
    <body>
        <div id="wrapper">
        <div class="header">
            <a href="index"><img id="logo" src="images/logo3.PNG"></a>
            <ul class="nav">
                <li><a href="index" />Home</a></li>
                <li><a id='nav_album' href="albums" />Albums</a></li>
<!--
                    <ul id="album_names_sub">
                        <li>Italy</li>
                        <li>Turkey</li>
                    </ul>
-->
                <?php
                    if (isset($_SESSION['email'])) {
                        print '<li><a href="logout" />Logout</a></li>
                        <li><a href="manage_account" />Manage Account</a></li>';
                    } else {
                        print '<li><a href="login" />Login</a></li>
                        <li><a href="create_account" />Create Account</a></li>';
                    }
                ?>
                <li><a href="contact" />Contact</a></li>
                <li><a href="about" />About me</a></li>
            </ul>
        </div>
<!--
        <div id="ad">
            <script type="text/javascript">
                sa_client = "f6c9b9dfac12b57bf1f28c200b52eeaa";
                sa_code = "69d21e8a247bc07b96c55a98f5d883af";
                sa_protocol = ("https:"==document.location.protocol)?"https":"http";
                sa_pline = "0";
                sa_maxads = "2";
                sa_bgcolor = "FFFFFF";
                sa_bordercolor = "BDD631";
                sa_superbordercolor = "BDD631";
                sa_linkcolor = "001EB5";
                sa_desccolor = "000000";
                sa_urlcolor = "788300";
                sa_b = "1";
                sa_format = "column_120x240";
                sa_width = "120";
                sa_height = "240";
                sa_location = "0";
                sa_radius = "4";
                sa_borderwidth = "1";
                sa_font = "0";
                document.write(unescape("%3cscript type='text/javascript' src='"+sa_protocol+"://sa.entireweb.com/sense2.js'%3e%3c/script%3e"));
            </script>
        </div>-->
<!--

<script src="jquery/jquery-2.2.4.min.js"></script>
<script>
$(function() {
    
    $('#nav_album').on('mouseover', function() {
       $('#album_names').css({display: 'block'}).slideDown(1000);;
    });
    
})
</script>
-->
