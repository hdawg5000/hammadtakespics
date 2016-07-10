<?php
    define('TITLE','Albums | Hammad Takes Pics');
    include('album/templates/header.php');
?>
    <link rel="stylesheet" href="album/css/style.css" type="text/css" />
    <link rel="stylesheet" href="album/css/bootstrap.css" type="text/css" />
    <?php 
    print '<div id="album_main">
        <h1 class="page_title">Albums</h1></br>
        </br>
        <ul id="albums">
            <h2>Italy</h2></br>
            <a href="album/italy">
                <li><img src="https://lh3.googleusercontent.com/NjEJUxBuX5jcwJeniM7kuqmZ_zSxFJdhYFk_ESkNOQSpumFeVHtT9Uyj2GtMEDujcv4EMK6bP_0wDw=w1247-h832-no"></li>
            </a>
            </br>
            </br>
            <h2>Turkey</h2></br>
            <a href="album/turkey">
                <li><img src="https://lh3.googleusercontent.com/_rWVeK-bd8zlOCU5QUhBI5O6bAbDHw_u_fEzakIJwuP9YnPY6yY_sscLgiqG4h5PyNX3I1VVjD6Unw=w1247-h832-no"></li>
            </a>
            </br>
            </br>
        </ul>
    </div>'; 
    include('templates/footer.php'); 
?>