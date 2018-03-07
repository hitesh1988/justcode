<?php get_header(); ?>

  <div class="header">
        <video class="video-adjust video-res" width="100%" autoplay loop>
		<source src="<?php echo get_template_directory_uri() . '/'; ?>video/DS_WWD_Masthead.mp4" type="video/mp4">
		<source src="<?php echo get_template_directory_uri() . '/'; ?>video/Mock-up.webm" type="video/webm">
		Your browser does not support HTML5 video. </video>
        <div class="main-head">
            <div class="container">
                <div class="intro-text">
                    <div class="arpatech-logo"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/favicon-icon.png" alt=" World&#39;s Finest Technology Hub"></div>
                    <h1>Where your Web <br> dreams become reality</h1>
                    <div class="swiper-container swiper-container-h swiper-container-vertical">
                        <div class="swiper-wrapper" data-swipe="false">
                            <div class="swiper-slide swiper-slide-active" style="height: 28px;">
                                <div class="swiper-container swiper-container-v swiper-container-vertical">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, -1008px, 0px); transition-duration: 0ms;">
                                        <div class="swiper-slide swiper-slide-prev" style="height: 1008px;">We Are Pioneers</div>
                                        <div class="swiper-slide swiper-slide-active" style="height: 1008px;">We Are Problem Solvers</div>
                                        <div class="swiper-slide swiper-slide-next" style="height: 1008px;">We Are Innovators</div>
                                        <div class="swiper-slide" style="height: 1008px;">We Are Creators</div>
                                        <!--<div class="swiper-slide" style="height: 1008px;">More Than 13 Years of IT Experience</div>-->
                                        <div class="swiper-slide" style="height: 1008px;">We Are justcode</div>
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-v swiper-pagination-bullets"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->

                    </div>
                    <div class="for-start-btn"> <a href="#services" class="page-scroll">
					<button type="submit" class="btn next-step2 ">View Services</button>
					</a> <a href="#portfolio" class="page-scroll">
					<button type="submit" class="btn next-step">View Portfolio</button>
					</a> </div>
                </div>
                <a href="#services" class="page-scroll">
                    <div class="arrow" id=""> <img src="<?php echo get_template_directory_uri() . '/'; ?>images/bounce.png"> </div>
                </a>
            </div>
        </div>
        <!--<div id="particles-js"></div>-->
    </div>

    <!-- Services Section -->
    <section id="services" class="second-sec-main">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="specialities">
                        <h2>We are <br>  Experts
                        </h2>
                        <p>We ensure that once we take a project on-board, we provide 360 degree solutions. As justcode is a technological hub, we give your project the ultimate platform it needs to be scalable and successful.</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <ul class="service-main-line">
                        <li class="col-sm-3 col-md-3">
                            <a href="<?php echo get_permalink( get_page_by_path( 'services/web-design-development' ) );  ?>">
                                <div class="magento-1">
                                    <div class="for-hieght">
                                        <p>web design &amp; development</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-sm-3 col-md-3">
                            <a href="<?php echo get_permalink( get_page_by_path( 'services/mobile-app-development' ) );  ?>">
                                <div class="magento-1">
                                    <div class="for-hieght2">
                                        <p>mobile app development</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-sm-3 col-md-3">
                            <a href="<?php echo get_permalink( get_page_by_path( 'services/software-development' ) );  ?>">
                                <div class="magento-1">
                                    <div class="for-hieght3">
                                        <p>software development</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-sm-3 col-md-3">
                            <a href="<?php echo get_permalink( get_page_by_path( 'services/startup' ) );  ?>">
                                <div class="magento-1">
                                    <div class="for-hieght9">
                                        <p>startup<br>
                                            <span>360 Degree Solution</span> </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <ul class="service-main-line">
                        <li class="col-sm-3 col-md-3">
                            <a href="<?php echo get_permalink( get_page_by_path( 'services/magento-development' ) );  ?>">
                                <div class="magento-1">
                                    <div class="for-hieght4">
                                        <p>magento development<br>
                                            <span>360 Degree Solution</span> </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-sm-3 col-md-3">
                            <a href="<?php echo get_permalink( get_page_by_path( 'services/ecommerce-development' ) );  ?>">
                                <div class="magento-1">
                                    <div class="for-hieght5">
                                        <p>ecommerce development<br>
                                            <span>360 Degree Solution</span> </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-sm-3 col-md-3">
                            <a href="<?php echo get_permalink( get_page_by_path( 'services/managed-cloud-hosting' ) );  ?>">
                                <div class="magento-1">
                                    <div class="for-hieght6">
                                        <p>Managed cloud hosting</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-sm-3 col-md-3">
                            <a href="<?php echo get_permalink( get_page_by_path( 'services/digital-marketing' ) );  ?>">
                                <div class="magento-1">
                                    <div class="for-hieght11">
                                        <p>digital marketing</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>                    
                </div>
            </div>
        </div>
    </section>
    <div class="full-expert" id="hidden">
        <div class="container">
            <div class="row">
                <div class="expert">
                    <div class="col-md-4">
                        <p>Discuss with our Experts &amp; Choose the <span>best solution for your business</span></p>
                    </div>
                    <div class="email-live"> <a class="callnow" href="tel:+18002143513"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/tel-1-1.png"> +1 (800) 214-3513</a> </div>
                    <div class="email-live-3"> <a href="mailto:sales@justcode.com"><img src="<?php echo get_template_directory_uri() . '/'; ?>images/tel-3.png"> Email Us</a> </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 magento-right-sec">
                <div class="certified"> <img alt="Magento Certified Agency" src="<?php echo get_template_directory_uri() . '/'; ?>images/magento-dev.png" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    <h2>magento </h2>
                    <span>certified agency</span>
                    <p>We help you in building the perfect Magento ecommerce store because we have in-house Magento certified developers that will empower your store with their innovative technological solutions. </p>
                </div>
            </div>
            <div class="col-md-6 magento-right-sec-2">
                <div class="certified-2"> <img alt="Magento Meetup Dubai" src="<?php echo get_template_directory_uri() . '/'; ?>images/magento-logo-white.png" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                    <h3>magento </h3>
                    <span>meetup Dubai</span>
                    <p>justcode is the first company in the world to organize an official Magento Meetup in Dubai. The Magento Meetup Dubai was attended by top-known key influencers related to the ecommerce industry.</p>
                </div>
            </div>
        </div>
    </div>
    

<?php get_footer(); ?>
