<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>A Different Dimension</title>
		<?php wp_head(); ?>


		<link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
	</head>

	<?php

		if( is_front_page() ):
			$awesome_classes = array( 'awesome-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-awesome-class' );
		endif;

		if( !defined(THEME_IMG_PATH)){
	   define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/images' );
	  }
	?>

	<body <?php body_class( $awesome_classes ); ?>>


		<div class="main-sidenav" id="main-sidenav">
			<input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
			<label class="menu-open-button" for="menu-open" onclick="toggleSidenav();">
				<span class="hamburger hamburger-1"></span>
				<span class="hamburger hamburger-2"></span>
				<span class="hamburger hamburger-3"></span>
			</label>
			<nav class="sidenav" id="sidenav">
				<div class="sidenav-brand">
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					?>
					<a class="sidenav-brand-logo" href="/"><img src="<?php echo $image[0]; ?>"></a>
				</div>
				<div class="sidenav-menu">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'primary',
							'container' => false,
							'menu_class' => 'nav navbar-nav '
							)
						);
					?>
				</div>
				<div class="sidenav-social">
					<?php	if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
					<div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
						<?php dynamic_sidebar( 'custom-header-widget' ); ?>
					</div>
					<?php endif; ?>
				</div>
			</nav>
		</div>
		<div class="cover" onclick="toggleSidenav();"></div>



		<section class="container-fluid"><!-- background wrapper-->

			<!-- background image from wp -->
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

			<!-- content outer wrapper -->
			<div class="content-wrapper container">
