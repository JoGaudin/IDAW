<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Afterlight
 * @since Afterlight 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'afterlight' ); ?></a>

	<?php if ( get_header_image() ) : ?>
		<div class="header-image">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			</a>
		</div>
	<?php endif; // End header image check. ?>

	
	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-top">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				
				<nav class="main-navigation" role="navigation">
					<?php
						// Primary navigation menu.
						wp_nav_menu( array(
							'menu_class'     => 'nav-menu',
							'theme_location' => 'primary',
						) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>
			
			<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
				<button id="sidebar-toggle" class="sidebar-toggle"></button>
			<?php endif; ?>
		</div><!-- .site-header-top -->
				
		<div class="site-branding">
			<div class="site-branding-inner">
				<?php afterlight_the_site_logo(); ?>

				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
				<?php endif; ?>
			</div>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation">
					<?php
						// Social links navigation menu.
						wp_nav_menu( array(
							'theme_location' => 'social',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>
		</div><!-- .site-branding -->
	</header><!-- .site-header -->

	<div id="content" class="site-content">
