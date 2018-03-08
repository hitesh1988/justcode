<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package justcode
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-icon.png" />
	<?php wp_head(); ?>
	<script>
	var ajaxUrl = '<?php echo admin_url( 'admin-ajax.php' ); ?>'
	</script>
</head>
 

<body class="estimation-tool">


<header class="estimation-header">
    <div class="headerwrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img width="240" src="<?php echo get_template_directory_uri() . '/'; ?>images/login-logo.png" class="img-responsive" alt="justcode">
                </a>
            </div>
            <div class="col-sm-9 pull-right">
                <nav id="mainNav" class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header pull-right">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i> </button>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-left my-nav-new">
                                <li class="hidden active"> <a href="#page-top"></a> </li>
                                <li> <a class="page-scroll" href="<?php echo site_url(); ?>">Home </a> </li>
                                <li> <a id="about-act" class="page-scroll" href="<?php echo site_url().'/about'; ?>">About</a> </li>
                                <li class="dropdown mega-menu-half"> 
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Services </a> <img class="dd-arrow" src="<?php echo get_template_directory_uri() . '/'; ?>images/dd-arrow.png">
                                    <ul class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li class="for-mar-set">
                                            <div class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <ul class="service-main-line service-main-line2">
                                                            <li class="col-sm-3 col-md-3">
                                                                <a href="<?php echo get_permalink( get_page_by_path( 'services/web-design-development' ) );  ?>">
                                                                    <div class="magento-1 magento-dark">
                                                                        <div class="for-hieght hieght-dark">
                                                                            <p>web design &amp; development</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="col-sm-3 col-md-3">
                                                                <a href="<?php echo get_permalink( get_page_by_path( 'services/mobile-app-development' ) );  ?>">
                                                                    <div class="magento-1 magento-dark">
                                                                        <div class="for-hieght2 hieght-dark">
                                                                            <p>mobile app development</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="col-sm-3 col-md-3">
                                                                <a href="<?php echo get_permalink( get_page_by_path( 'services/software-development' ) );  ?>">
                                                                    <div class="magento-1 magento-dark">
                                                                        <div class="for-hieght3 hieght-dark">
                                                                            <p>software development</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="col-sm-3 col-md-3">
                                                                <a href="<?php echo get_permalink( get_page_by_path( 'services/startup' ) );  ?>">
                                                                    <div class="magento-1 magento-dark">
                                                                        <div class="for-hieght9 hieght-dark">
                                                                            <p>startup<br>
                                                                                <span>360 Degree Solution</span> </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul class="service-main-line service-main-line2">
                                                            <li class="col-sm-3 col-md-3">
                                                                <a href="<?php echo get_permalink( get_page_by_path( 'services/magento-development' ) );  ?>">
                                                                    <div class="magento-1 magento-dark">
                                                                        <div class="for-hieght4 hieght-dark">
                                                                            <p>magento development<br>
                                                                                <span>360 Degree Solution</span> </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="col-sm-3 col-md-3">
                                                                <a href="<?php echo get_permalink( get_page_by_path( 'services/ecommerce-development' ) );  ?>">
                                                                    <div class="magento-1 magento-dark">
                                                                        <div class="for-hieght5 hieght-dark">
                                                                            <p>ecommerce development<br>
                                                                                <span>360 Degree Solution</span> </p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="col-sm-3 col-md-3">
                                                                <a href="<?php echo get_permalink( get_page_by_path( 'services/managed-cloud-hosting' ) );  ?>">
                                                                    <div class="magento-1 magento-dark">
                                                                        <div class="for-hieght6 hieght-dark">
                                                                            <p>Managed cloud hosting</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="col-sm-3 col-md-3">
                                                                <a href="<?php echo get_permalink( get_page_by_path( 'services/digital-marketing' ) );  ?>">
                                                                    <div class="magento-1 magento-dark">
                                                                        <div class="for-hieght11 hieght-dark">
                                                                            <p>digital marketing</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>                                            
                                                    </div>                                       
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li style="display:none;" class=""> <a class="page-scroll" href="#hidden">hidden</a> </li>
                              <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/web-design-development' ) );  ?>">web design &amp; development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/mobile-app-development' ) );  ?>">mobile app development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/software-development' ) );  ?>">software development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/startup' ) );  ?>">startup</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/magento-development' ) );  ?>">magento development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/ecommerce-development' ) );  ?>">ecommerce development</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/managed-cloud-hosting' ) );  ?>">Managed cloud hosting</a></li>                    <li class="for-mob-lines"><a href="<?php echo get_permalink( get_page_by_path( 'services/digital-marketing' ) );  ?>">digital marketing</a></li>
                                <li> <a id="contact-act" class="page-scroll" href="<?php echo site_url().'/careers'; ?>"><img class="hiring-text" src="<?php echo get_template_directory_uri() . '/'; ?>images/hiring.png"> Careers</a> </li>
                                <li> <a id="contact-act" class="page-scroll" href="<?php echo site_url().'/my-account'; ?>"> My Account</a> </li>
                                                    
                            </ul>
                            

                        </div></div></div>
                  
                </nav>
            </div>
        </div>
    </div>
    </div>
</header>
