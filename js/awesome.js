//javascript functions

// site load_screen -- also uncomment the div in the header and the css style for #load_screen
jQuery(document).ready(function($) {
  $(window).load(function(){
    $('#load_screen').fadeOut('slow',function(){$(this).remove();});
  });
});


//sidenav toggle
function toggleSidenav(menu) {
  var content = document.getElementById('sidenav-menu-content');
  var shop = document.getElementById('sidenav-menu-shop');
  var services = document.getElementById('sidenav-menu-services');
  var contentBox = document.getElementById('content-menu-open');
  var shopBox = document.getElementById('shop-menu-open');
  var servicesBox = document.getElementById('services-menu-open');

  document.body.classList.add('noscroll');

  content.classList.remove('active-menu');
  shop.classList.remove('active-menu');
  services.classList.remove('active-menu');

  if(menu == 0){
    console.log("we got cover");
    document.body.classList.remove('left-nav-active');
    document.body.classList.remove('noscroll');
  }else if(menu == 1){
    console.log("we got content");
    content.classList.add('active-menu');
    document.body.classList.add('left-nav-active');
  }else if(menu == 2){
    console.log("we got shop");
    shop.classList.add('active-menu');
    document.body.classList.add('left-nav-active');
  }else if(menu == 3){
    console.log("we got services");
    services.classList.add('active-menu');
    document.body.classList.add('left-nav-active');
  }

  contentBox.checked = false;
  shopBox.checked = false;
  servicesBox.checked = false;



};
