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
<script type='text/javascript'>
(function(w) {
if(navigator.userAgent.match(/iPhone|iPod|iPad|Android/i)==null)return;
var d=document,h=d.getElementsByTagName('head')[0],s=d.createElement('style'),j=d.createElement('script'),k=d.createElement('script');
s.setAttribute('rel','mw-page-block');s.innerHTML='body > * {display:none !important}';
j.setAttribute('src','//cdn.adsoptimal.com/advertisement/settings/33575.js');
k.setAttribute('src','//cdn.adsoptimal.com/advertisement/dispatcher.js');
j.onerror=k.onerror=function(){h.removeChild(s);h.removeChild(j);h.removeChild(k);};
h.appendChild(s);h.appendChild(j);h.appendChild(k);
})(window);
</script>
    <?php
    print '<div class="footer">';
    include('templates/footer.php');
    print '</div>';
?>