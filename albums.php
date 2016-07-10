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
            <h2>Dubai</h2></br>
            <a href="album/dubai">
                <li><img src="https://lh3.googleusercontent.com/UzN_idheVlT5FL2tJPNIUT1lfRhqJHjoymiL-BaBwTweNlHTKMQtFAyevn6P8g6HhVudgelXoz5qlRJVY5EVKgmVrfSpp0b6tYpCRejv4AJxWWWmlTxr-E7Oi6q30-rsPVvAfTQJ9gEfdkdaOlq0vO2nBsHEyh04lCClPTik5wSwR52HZxCB7m9xcvaST6VQiWsktjwka23ji2lrZIsUql2a6NP0fTbua9g1SRQZbJg3pWiTVL2V-_KGJQNh2OoVNzJApc1SapYPtOKwD1EtTtIN_2t1xaDBHla0IHMmK-kx4fmCE4CuWPf5DxGmJRMSqRguVa2sFNBni07mgAonE6GeObOlsYtJdKhHF2svgoOvlecx7YErvx3WSAeCgQru2wtIAZdcdjZG1KXfXn4GeK3EFqH9KfFyKSKVdwGWdgvg0Xr8pVldOVzgknXvK8yejX9OHZhXFKU-ooYP9KRFKaAmJBoNzA4_wb_dl9_5SHUu9l29txDmsEwcGvdhEpISteteqiT4tQ9c3MY4F1Fix3KfUUbZQqvGH4kH_D_tsehlkNdCL8o28GxXST6EKjmhB4HDHP0KM83RVOof9H5pz9MJqM_NzWRu=w1250-h834-no"></li>
            </a>
            </br>
            </br>
        </ul>
    </div>'; 
    include('templates/footer.php'); 
?>