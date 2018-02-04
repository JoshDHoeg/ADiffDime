<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>A Different Dimension</title>
		<?php wp_head(); ?>

		<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
		<!-- <link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet"> -->
	</head>

	<?php

		if( is_front_page() ):
			$awesome_classes = array( 'awesome-class', 'my-class', 'animate-background' );
		else:
			$awesome_classes = array( 'no-awesome-class', 'animate-background' );
		endif;

		if( !defined(THEME_IMG_PATH)){
	   define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
	  }
	?>

	<body <?php body_class( $awesome_classes ); ?>>

		<div class="load_Screen animate-loadScreen" id="load_screen"><div class="load_image"><img class="animate-load"src="<?php echo get_stylesheet_directory_uri(); ?>/images/sacred6.png"></div></div>

		<div  id="sidenav-menus">
			<input type="checkbox" href="#" class="content-menu-open" name="content-menu-open" id="content-menu-open"/>
			<label class="menu-open-button" for="content-menu-open" onclick="toggleSidenav(1);" id="content-menu">
				<span class="hamburger hamburger-1"></span>
				<span class="hamburger hamburger-2"></span>
				<span class="hamburger hamburger-3"></span>
				<span class="tooltiptext">Catagories</span>
			</label>
			<input type="checkbox" href="#" class="shop-menu-open" name="shop-menu-open" id="shop-menu-open"/>
			<label class="menu-open-button" for="shop-menu-open" onclick="toggleSidenav(2);" id="shop-menu">
				<img src="<?php echo get_template_directory_uri(); ?>/images/shop.png" width="20px">
				<span class="tooltiptext">Shop</span>
			</label>
			<input type="checkbox" href="#" class="services-menu-open" name="services-menu-open" id="services-menu-open"/>
			<label class="menu-open-button" for="services-menu-open" onclick="toggleSidenav(3);" id="services-menu">
				<img src="<?php echo get_template_directory_uri(); ?>/images/services.png" width="20px">
				<span class="tooltiptext">Services</span>
			</label>
		</div>

		<div class="main-sidenav" id="content-sidenav">
			<nav class="sidenav" id="sidenav">
				<div class="sidenav-search">
					<?php get_search_form(); ?>
				</div>
				<div class="sidenav-brand">
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					?>
					<a class="sidenav-brand-logo" href="/"><img src="<?php echo $image[0]; ?>"></a>
				</div>
					<div class="sidenav-menu" id="sidenav-menu-content">
						<div class="sidenav-social">
							<?php	if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
							<div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
								<?php dynamic_sidebar( 'custom-header-widget' ); ?>
							</div>
							<?php endif; ?>
						</div>
						<?php
							wp_nav_menu(array(
								'theme_location' => 'Content',
								'container' => false,
								'menu_class' => 'nav navbar-nav '
								)
							);
						?>
					</div>
					<div class="sidenav-menu" id="sidenav-menu-shop">
 						<?php
							wp_nav_menu(array(
								'theme_location' => 'Shop',
								'container' => false,
								'menu_class' => 'nav navbar-nav '
								)
							);
						?>
					</div>
					<div class="sidenav-menu" id="sidenav-menu-services">
 						<?php
							wp_nav_menu(array(
								'theme_location' => 'Services',
								'container' => false,
								'menu_class' => 'nav navbar-nav '
								)
							);
						?>
					</div>
			</nav>
		</div>
		<div class="cover" onclick="toggleSidenav(0);"></div>



		<section class="container-fluid"><!-- background wrapper-->

			<!-- background image from wp -->
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

			<!-- content outer wrapper -->
			<div class="content-wrapper container">
