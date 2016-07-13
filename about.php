<?php
    define('TITLE', 'About | Hammad Takes Pics');
    include('templates/header.php');
    
    if(!isset($_SESSION)) { 
        session_start(); 
    }

?>

    <div id="about_me">
        <h1 class="page_title">About me</h1>
        <p>Coming soon...</p>
        <img width="300" height="300" src="img/display.jpg">
    </div>

<?php
    include('templates/footer.php');
?>
    <script src="js/active.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script><script src="js/active.js"></script>
<link rel="stylesheet" href="album/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="album/css/style.css" type="text/css" />