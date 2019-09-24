<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1306">
    <div class="row">
        <div class="footer tc-padding-top">
            <div class="container">
                <div class="newslatter-holder h-white">
                    <h5>NEWSLETTER</h5>
                    <div class="newslatter">
                        <input type="text" placeholder="Enter your mail" class="form-control">
                        <a href="" class="glyph-icon flaticon-sent-mail"></a>
                    </div>
                </div>
                <!-- Footer Columns -->
                <div class="footer-columns">
                    <div class="row">
                        <!-- Column -->
                        <div class="col-sm-4 col-xs-12 col-lg-4 col-sm-4">
                            <div class="footer-c-widget logo-widget p-white">
                                <img src="<?php echo $url_path ?>/images/footer-logo.png" alt="">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard
                                </p>
                                <div class="social-icons">
                                    <ul>
                                        <li><a class="fa fa-facebook" href="#"></a></li>
                                        <li><a class="fa fa-instagram" href="#"></a></li>
                                        <li><a class="fa fa-google-plus" href="#"></a></li>
                                        <li><a class="fa fa-twitter" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->

                        <!-- Column -->
                        <div class="col-sm-2 col-xs-12  col-lg-2 col-sm-2">
                            <div class="footer-c-widget h-white list-widget">
                                <h3>ADMISSIONS</h3>
                                <ul>
                                    <li><a href="#">Courses</a></li>
                                    <li><a href="#">Theme Overview</a></li>
                                    <li><a href="#">Colleges &amp; Schools</a></li>
                                    <li><a href="#">Course catalog</a></li>
                                    <li><a href="#">Single Course</a></li>
                                    <li><a href="#">Theme Overview</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-2 col-xs-12  col-lg-2 col-sm-2">
                            <div class="footer-c-widget h-white list-widget">
                                <h3>QUICK LINKS</h3>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">College Administration</a></li>
                                    <li><a href="#">History</a></li>
                                    <li><a href="#">Locations</a></li>
                                    <li><a href="#">Our Mission</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Column -->

                        <!-- Column -->
                        <div class="col-sm-4 col-xs-12 col-lg-4 col-sm-4">
                            <div class="footer-c-widget h-white address-list">
                                <h3>Contact us</h3>
                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        PO Box CT16122 Collins Street West, Victoria 8007,
                                    </li>
                                    <li><i class="fa fa-mobile"></i>Australia.</li>
                                    <li><i class="fa fa-envelope-o"></i>+81 (2) 345 6789</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Column -->

                    </div>
                </div>
            </div>

            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="./images/img1.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./images/img2.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./images/img3.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./images/img4.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./images/img5.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./images/img6.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./images/img3.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./images/img4.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./images/img5.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./images/img6.jpg" alt=""></div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>


            <div class="sub-footer p-white text-center">
                <p>© Copyright 2015. Powered by WordPress. Aristotle by Sunrise theme</p>
            </div>
        </div>
    </div>
</div>