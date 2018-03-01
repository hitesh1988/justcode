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
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-icon.png" />
	<?php wp_head(); ?>
</head>
 

<body class="estimation-tool">


<header class="estimation-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a class="logo" href="index.php">
                    <img width="140" src="<?php echo get_template_directory_uri() . '/'; ?>images/login-logo.png" class="img-responsive" alt="justcode">
                </a>
            </div>
        </div>
    </div>
</header>