<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

/**
 * My Account navigation.
 * @since 2.6.0
 */
do_action( 'woocommerce_account_navigation' ); ?>

<!-- <nav class="menu">
  <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
  <label class="menu-open-button" for="menu-open">
    <span class="hamburger hamburger-1"></span>
    <span class="hamburger hamburger-2"></span>
    <span class="hamburger hamburger-3"></span>
  </label>

  <a rel="nofollow" rel="noreferrer"href="#" class="menu-item"> <i class="fa fa-bar-chart"></i> </a>
  <a rel="nofollow" rel="noreferrer"href="#" class="menu-item"> <i class="fa fa-plus"></i> </a>
  <a rel="nofollow" rel="noreferrer"href="#" class="menu-item"> <i class="fa fa-heart"></i> </a>
  <a rel="nofollow" rel="noreferrer"href="#" class="menu-item"> <i class="fa fa-envelope"></i> </a>
  <a rel="nofollow" rel="noreferrer"href="#" class="menu-item"> <i class="fa fa-cog"></i> </a>

</nav> -->


<div class="woocommerce-MyAccount-content">
	<?php
		/**
		 * My Account content.
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
</div>
