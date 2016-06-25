<?php
    define('TITLE', 'Hammad Photography | Home');
    include('templates/header.php');

    session_start();

    print '<div id="image_slider">
            <ul class="slides">
                <li class="slide"><img src="https://lh3.googleusercontent.com/iwUS1U_O3wB9EMUDeNgM2ASK1kqibAdKPYZIhg7MV0M1A3uOHSGAa2NlixvU-Zm6ZKEGD1spjjLeTRkTxmooxpVnm4zR_5W4mELzopp3ZpIddWXZlw22GnF5VU95Y3EyxNrmVzh3qfQ9jBIeQsZzPFVEatmhvcyO3WImf_dc4w0bdgaOAX0h7d-yQwId8Obo4sDVN6DToc4hJhBzNH-3qdj1MUbWgRfXWi54GCjBOQxwKENDUfcdpVhFy0ERGCQHc7B6IYO3d9HCFWep-37lFDIoK0hmGvNx4aelLgO77Q6zjdgUMggswISyfkh8eZ3iRFKbXPDELsknm97Rj59yHxlMUGtgEc8K_N17t8oXFSzhQw55XkMr5q8rI5qFc19edvpbyKHwBnKe-dG_KtjQ51BpdmwPnUEYUnOVqgwhjb1896vPUlUzMGD7mnThj3AQa8SAXYhjsem1cHiK2Tvu7S9v2tMzzlTmPIWv0qO8lGtZmaDb_OANom387v1vIMWRMCNunkea2cW1CNyRcrIqdoZ079OydlZGNgMVoO8wXXdjb83AYO7MH8CKjMySeF_N055v_-kKJfFKsUsF8JgFDCLKCnOv5IPv=w1196-h673-no"></li>
                <li class="slide"><img src="https://lh3.googleusercontent.com/kF9iRv9NdaNA6LQhoY13ivYDYy4D2PbC8_zL_R3kgSvX22zTqD97b_ocPExIQM9X566lpIHy82PMYUELg5OWTMY1obFSiXiPoAR_T_kPDdxEcXoY7TwXSLIPaPD7Q8pGaKdLeNrdwzwKyTIhR5sl-elzXBUj5sRNK9ZHNF0pKXtcRDQs63yYvhoUifu2DzvIeaB0Y-FcEP6Q1_Fnedy1qrRsmgZUu5bVYpbzxnUADRzBymtZgElV8nkjSqM90fNk9jYwp3TfXZTVwLAOsNy3hHHiqUDgQgnvwaio3KzOm5Wptps5Xdcx0v8wvYXI-SXoF7eO4C3xmDzRsXWxGrfLsY1CeDgIaookyc_2mnEPX3HDkTDq8xG6R2gY4RWK674VLLTFV4BYSXK3A5HBoY0yGaW_QJBRo9plMqInwxrQqpBHepMQjNSLsFjLoTw-HwB5dZU0U5M7BgNiJi9XJLrVgKwN_UPxHqrvE7YxCXUCPCIQ7WaDE7iuf60H8ON6j8tjwz7qk4SoZ3XIsmcJL_1qSdMGFDmXACXwJKHAWKWcFMTKL2iwcSKaz3iLf673WMTM7DzfKZEIPH-EwBMncUFSHyVjt5dKa5Ud=w1196-h673-no"></li>
                <li class="slide"><img src="https://lh3.googleusercontent.com/iwUS1U_O3wB9EMUDeNgM2ASK1kqibAdKPYZIhg7MV0M1A3uOHSGAa2NlixvU-Zm6ZKEGD1spjjLeTRkTxmooxpVnm4zR_5W4mELzopp3ZpIddWXZlw22GnF5VU95Y3EyxNrmVzh3qfQ9jBIeQsZzPFVEatmhvcyO3WImf_dc4w0bdgaOAX0h7d-yQwId8Obo4sDVN6DToc4hJhBzNH-3qdj1MUbWgRfXWi54GCjBOQxwKENDUfcdpVhFy0ERGCQHc7B6IYO3d9HCFWep-37lFDIoK0hmGvNx4aelLgO77Q6zjdgUMggswISyfkh8eZ3iRFKbXPDELsknm97Rj59yHxlMUGtgEc8K_N17t8oXFSzhQw55XkMr5q8rI5qFc19edvpbyKHwBnKe-dG_KtjQ51BpdmwPnUEYUnOVqgwhjb1896vPUlUzMGD7mnThj3AQa8SAXYhjsem1cHiK2Tvu7S9v2tMzzlTmPIWv0qO8lGtZmaDb_OANom387v1vIMWRMCNunkea2cW1CNyRcrIqdoZ079OydlZGNgMVoO8wXXdjb83AYO7MH8CKjMySeF_N055v_-kKJfFKsUsF8JgFDCLKCnOv5IPv=w1196-h673-no"></li>
            </ul>
        </div>';

    include('templates/footer.php');
?>
<script src="jquery/jquery-2.2.4.min.js"></script>
<script>
$(function() {
    
    //configuration
    var width = 673;
    var animationSpeed = 1000;
    var pause = 4000;
    var currentSlide = 1;
    
    //cache DOM
    var $slider = $('#image_slider');
    var $slideContainer = $slider.find('.slides');
    var $slides = $slideContainer.find('.slide');
    
    //setInterval
    setInterval(function() {
        $slideContainer.animate({'margin-left': '-=' + this.width}, animationSpeed, function() {
            currentSlide++;
            if (currentSlide == 2) {
                currentSlide = 1;
                $slideContainer.css('marglin-left', 0);
            }
        });
    }, pause);
        //animate margin-left
        //if last slide, go to image 1
})
</script>