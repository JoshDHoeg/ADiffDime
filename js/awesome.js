//javascript functions

// site load_screen -- also uncomment the div in the header and the css style for #load_screen
jQuery(document).ready(function($) {
  $(window).load(function(){
    $('#load_screen').fadeOut('slow',function(){$(this).remove();});
  });
});


//sidenav toggle
function toggleSidenav(bool) {
  document.body.classList.toggle('sidenav-active');
  document.body.classList.toggle('noscroll');
}
