//javascript functions
var didScroll;
var lastScrollTop = 0;
var delta = 5;


// site load_screen -- also uncomment the div in the header and the css style for #load_screen
jQuery(document).ready(function($) {
var navbarHeight = $('#sidenav-menus').outerHeight();

  $(window).load(function(){
    $('#load_screen').fadeOut('slow',function(){$(this).remove();});
  });

  //on scroll, let the interval function know the user has scrolled
  $(window).scroll(function(){
    didScroll = true;
  });

  // run hasScrolled() and reset didScroll status
  setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  function hasScrolled() {
    var st = $(this).scrollTop();
    if (Math.abs(lastScrollTop - st) <= delta){
      return;
    }
    // If current position > last position AND scrolled past navbar...
    if (st > lastScrollTop && st > navbarHeight){
    // Scroll Down
      $('#sidenav-menus').addClass('nav-up').removeClass('nav-downp');
    } else {
      // Scroll Up
      console.log("weh");
      // If did not scroll past the document (possible on mac)...
      if(st + $(window).height() < $(document).height()) {
        $('#sidenav-menus').removeClass('nav-up').addClass('nav-down');
      }
    }
    lastScrollTop = st;

  };
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
