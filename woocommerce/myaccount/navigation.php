<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
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

do_action( 'woocommerce_before_account_navigation' );
?>

<nav class="woocommerce-MyAccount-navigation menu">
  <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
  <label class="menu-open-button" for="menu-open">
    <span class="hamburger hamburger-1"></span>
    <span class="hamburger hamburger-2"></span>
    <span class="hamburger hamburger-3"></span>
  </label>

  <a rel="nofollow" rel="noreferrer"href="/index.php/my-account/" class="myaccount-menu-item"> <img class="account-icon" src="<?php echo THEME_IMG_PATH; ?>/icons/dashboard.png" width="40px"> </a>
  <a rel="nofollow" rel="noreferrer"href="/index.php/my-account/orders/" class="myaccount-menu-item"> <img class="account-icon" src="<?php bloginfo('template_url'); ?>/../amazing/images/icons/orders.png" width="40px"> </a>
  <a rel="nofollow" rel="noreferrer"href="/index.php/my-account/edit-address/" class="myaccount-menu-item"> <img class="account-icon" src="<?php bloginfo('template_url'); ?>/../amazing/images/icons/addresses.png" width="40px"> </a>
  <a rel="nofollow" rel="noreferrer"href="/index.php/my-account/edit-account/" class="myaccount-menu-item"> <img class="account-icon" src="<?php bloginfo('template_url'); ?>/../amazing/images/icons/account.png" width="40px"> </a>
  <a rel="nofollow" rel="noreferrer"href="/index.php/my-account/customer-logout/" class="myaccount-menu-item"> <img class="account-icon" src="<?php bloginfo('template_url'); ?>/../amazing/images/icons/logout.png" width="40px"> </a>

</nav>

<style>


.woocommerce-MyAccount-navigation {
  -webkit-filter: url("#shadowed-goo");
          filter: url("#shadowed-goo");
}

.menu-open-button, .myaccount-menu-item {
  background: #061566;
  border-radius: 0;
  width: 80px;
  height: 80px;
  position: absolute;
  top: 0;
  left: 0;
  margin-right: 40px;
  text-align: center;
  line-height: 80px;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  -webkit-transition: -webkit-transform ease-out 200ms;
  transition: -webkit-transform ease-out 200ms;
  transition: transform ease-out 200ms;
  transition: transform ease-out 200ms, -webkit-transform ease-out 200ms;
  color: white;
}


.menu-open {
  display: none;
}

.hamburger {
  width: 25px;
  height: 3px;
  background: white;
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -12.5px;
  margin-top: -1.5px;
  -webkit-transition: -webkit-transform 200ms;
  transition: -webkit-transform 200ms;
  transition: transform 200ms;
  transition: transform 200ms, -webkit-transform 200ms;
}

.hamburger-1 {
  -webkit-transform: translate3d(0, -8px, 0);
          transform: translate3d(0, -8px, 0);
}

.hamburger-2 {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}

.hamburger-3 {
  -webkit-transform: translate3d(0, 8px, 0);
          transform: translate3d(0, 8px, 0);
}

.menu-open:checked + .menu-open-button .hamburger-1 {
  -webkit-transform: translate3d(0, 0, 0) rotate(45deg);
          transform: translate3d(0, 0, 0) rotate(45deg);
}
.menu-open:checked + .menu-open-button .hamburger-2 {
  -webkit-transform: translate3d(0, 0, 0) scale(0.1, 1);
          transform: translate3d(0, 0, 0) scale(0.1, 1);
}
.menu-open:checked + .menu-open-button .hamburger-3 {
  -webkit-transform: translate3d(0, 0, 0) rotate(-45deg);
          transform: translate3d(0, 0, 0) rotate(-45deg);
}

.woocommerce-MyAccount-navigation {
  position: absolute;
  left: 20px;
  padding-top: 20px;
  width: 380px;
  height: 250px;
  box-sizing: border-box;
  font-size: 20px;
  text-align: left;
}

.myaccount-menu-item:hover {
  background: #000000;
  color: #ff4081;
}
.myaccount-menu-item:nth-child(3) {
  -webkit-transition-duration: 70ms;
          transition-duration: 70ms;
}
.myaccount-menu-item:nth-child(4) {
  -webkit-transition-duration: 130ms;
          transition-duration: 130ms;
}
.myaccount-menu-item:nth-child(5) {
  -webkit-transition-duration: 190ms;
          transition-duration: 190ms;
}
.myaccount-menu-item:nth-child(6) {
  -webkit-transition-duration: 250ms;
          transition-duration: 250ms;
}
.myaccount-menu-item:nth-child(7) {
  -webkit-transition-duration: 310ms;
          transition-duration: 310ms;
}

.menu-open-button {
  z-index: 2;
  -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
          transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
  -webkit-transition-duration: 400ms;
          transition-duration: 400ms;
  -webkit-transform: scale(1.1, 1.1) translate3d(0, 0, 0);
          transform: scale(1.1, 1.1) translate3d(0, 0, 0);
  cursor: pointer;
}

.menu-open-button:hover {
  -webkit-transform: scale(1.2, 1.2) translate3d(0, 0, 0);
          transform: scale(1.2, 1.2) translate3d(0, 0, 0);
}

.menu-open:checked + .menu-open-button {
  -webkit-transition-timing-function: linear;
          transition-timing-function: linear;
  -webkit-transition-duration: 200ms;
          transition-duration: 200ms;
  -webkit-transform: scale(0.8, 0.8) translate3d(0, 0, 0);
          transform: scale(0.8, 0.8) translate3d(0, 0, 0);
}

.menu-open:checked ~ .myaccount-menu-item {
  -webkit-transition-timing-function: cubic-bezier(0.935, 0, 0.34, 1.33);
          transition-timing-function: cubic-bezier(0.935, 0, 0.34, 1.33);
}
.menu-open:checked ~ .myaccount-menu-item:nth-child(3) {
  -webkit-transition-duration: 160ms;
          transition-duration: 160ms;
  -webkit-transform: translate3d(0, 80px, 0);
          transform: translate3d(0, 80px, 0);
}

.menu-open:checked ~ .myaccount-menu-item:nth-child(4) {
  -webkit-transition-duration: 240ms;
          transition-duration: 240ms;
  -webkit-transform: translate3d(170px, 0, 0);
          transform: translate3d(170px, 0, 0);
}
.menu-open:checked ~ .myaccount-menu-item:nth-child(5) {
  -webkit-transition-duration: 320ms;
          transition-duration: 320ms;
  -webkit-transform: translate3d(260px, 0, 0);
          transform: translate3d(260px, 0, 0);
}
.menu-open:checked ~ .myaccount-menu-item:nth-child(6) {
  -webkit-transition-duration: 400ms;
          transition-duration: 400ms;
  -webkit-transform: translate3d(350px, 0, 0);
          transform: translate3d(350px, 0, 0);
}
.menu-open:checked ~ .myaccount-menu-item:nth-child(7) {
  -webkit-transition-duration: 480ms;
          transition-duration: 480ms;
  -webkit-transform: translate3d(440px, 0, 0);
          transform: translate3d(440px, 0, 0);
}
</style>





<?php do_action( 'woocommerce_after_account_navigation' ); ?>
