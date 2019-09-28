<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1299">
    <div class="space" style="margin-top: 40px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product-info">
                    <h1>Your favourite shoes on sale</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        <br>Quisque ultrices justo sed vehicula fringilla.</p>
                        <a href="#" class="theme-btn-1">Buy now</a>
                </div>
             </div>
             <div class="col-md-8">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">Slide 1</div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>
                            <div class="swiper-slide">Slide 4</div>
                            <div class="swiper-slide">Slide 5</div>
                            <div class="swiper-slide">Slide 6</div>
                            <div class="swiper-slide">Slide 7</div>
                            <div class="swiper-slide">Slide 8</div>
                            <div class="swiper-slide">Slide 9</div>
                            <div class="swiper-slide">Slide 10</div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                    <img src="<?php echo $url_path ?>/images/sale-product-2.png" class="img-responsive" alt="">
             </div>
        </div>
    </div>  
</div>