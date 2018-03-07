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
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img width="240" src="<?php echo get_template_directory_uri() . '/'; ?>images/login-logo.png" class="img-responsive" alt="justcode">
                </a>
            </div>
        </div>
    </div>
</header>