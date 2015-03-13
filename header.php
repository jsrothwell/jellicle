<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Jellicle
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'jellicle' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
<nav id="site-navigation" class="main-navigation" role="navigation">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<!– Brand and toggle get grouped for better mobile display –>
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
<?php bloginfo('name'); ?>
</a>
</div>

<!– Collect the nav links, forms, and other content for toggling –>
<div class="collapse navbar-collapse navbar-ex1-collapse">
<?php
wp_nav_menu(array(
'menu' => 'primary',
'theme_location' => 'primary',
'depth' => 2,
'container' => false,
'menu_class' => 'nav navbar-nav navbar-right',
'fallback_cb' => 'wp_page_menu',
'walker' => new wp_bootstrap_navwalker())
);
?>
</div><!– /.navbar-collapse –>
</div><!– /.container –>
</nav>
</nav><!– #site-navigation –>
	</header><!-- #masthead -->

	<div id="content" class="site-content content col-xs-10 col-xs-offset-1">
