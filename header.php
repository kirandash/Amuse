<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Amuse
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'amuse' ); ?></a>

	<?php if ( get_header_image() ) : 
	echo '<header id="masthead" class="site-header header-background-image" role="banner" style="background-image: url('.get_header_image().');">';
	else:
	echo '<header id="masthead" class="site-header" role="banner">';
	endif;
	?>
		<div class="site-branding">
        	<?php $logoOutput = amuse_get_custom_logo(); if( !empty( $logoOutput ) ): ?>
            <div class="site-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo amuse_get_custom_logo(); ?></a>
            </div>
            <?php else: ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; 
			endif;
			?>
		</div><!-- .site-branding -->
        
        <?php amuse_social_menu(); ?>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'amuse' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
