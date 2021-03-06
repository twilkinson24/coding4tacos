<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
		<?php if ( 'container' == $container ) : ?>
			<div class="container"><!-- .container -->
		<?php endif; ?>

		<div id="mobile-nav-wrap">

		<!-- Your site title as branding in the menu -->
		<?php if ( ! has_custom_logo() ) { ?>
					

					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

					<?php } else { ?>
					<div id="mobile-logo">
						<?php the_custom_logo(); ?>
					</div> 
				<?php
			} ?><!-- end custom logo -->
		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-light">



				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav mr-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

				<!-- Your site title as branding in the menu -->
				<?php if ( ! has_custom_logo() ) { ?>
					
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
					<?php endif; ?>

				<?php } else { ?>
					<div id="desktop-logo">
				<?php	the_custom_logo(); ?>
					</div><?php
				} ?><!-- end custom logo -->


				<div id="navbarNavDropdown" class="collapse navbar-collapse">
					<ul id="main-menu" class="navbar-nav ml-auto">
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a title="Tutoring" href="<?php echo get_home_url(); ?>/tutoring/" class="nav-link">Tutoring</a></li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a title="Say Hi" href="<?php echo get_home_url(); ?>/say-hi/" class="nav-link">Say Hi</a></li>
					</ul>
				</div>	
		

		</nav><!-- .site-navigation -->
			</div>
		<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>
	</div><!-- #wrapper-navbar end -->
