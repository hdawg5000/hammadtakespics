<?php
    define('TITLE', 'Videos | Hammad Takes Pics');
    include('templates/header.php');
    include_once('analyticstracking.php');
?>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="album/css/style.css" type="text/css" />
    <link rel="stylesheet" href="album/css/bootstrap.css" type="text/css" />
    <div class="videos_main_content">
        <h1 class="videos_main_title">Videos</h1>
        <h2 id="yt_video_title">Dubai | January 2016</h2>
        <div class="yt-video">
            <iframe width="640" height="480" src="https://www.youtube.com/embed/RQtjDbXMQN4" frameborder="0" allowfullscreen></iframe>
        </div>
        <h2 id="yt_video_title">Italy | January 2016</h2>
        <div class="yt-video">
            <iframe width="640" height="480" src="https://www.youtube.com/embed/IyaGh9zNmmY" frameborder="0" allowfullscreen></iframe>
        </div>
        <h2 id="yt_video_title">Istanbul | December 2015</h2>
        <div class="yt-video">
            <iframe width="640" height="480" src="https://www.youtube.com/embed/aEGSfaIaKQQ" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <?php
    include('templates/footer.php');
?>