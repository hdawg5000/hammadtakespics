<?php
    define('TITLE', 'Home | Hammad Takes Pics');
    include('templates/header.php');
    include_once("analyticstracking.php");

    session_start();
?>
    <div id="myCarousel" class="carousel slide" data-pause="false">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner image">
            <div class="item active img1">
                <div class="carousel-caption">
                    <h2>St. Peter's Basilica</h2>
                    <p>Vatican City</p>
                </div>
            </div>
            <div class="item img2">
                <div class="carousel-caption">
                    <h2>Dubai</h2>
                    <p>United Arab Emirates</p>
                </div>
            </div>
            <div class="item img3">
                <div class="carousel-caption">
                    <h2>Venice</h2>
                    <p>Italy</p>
                </div>
            </div>
            <div class="item img4">
                <div class="carousel-caption">
                    <h2>Hagia Sophia</h2>
                    <p>Turkey</p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.carousel').carousel({
                interval: 5000
            })
        });
    </script>
    <?php
    print '<div class="footer">';
    include('templates/footer.php');
    print '</div>';
?>