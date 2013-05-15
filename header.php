<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php bloginfo( 'title' ); ?></title>	
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head();?>
</head>

<body>

<!-- <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php header_image(); ?>" alt="<?php bloginfo( 'title' ); ?>"></a> -->
<?php wp_nav_menu(); ?>