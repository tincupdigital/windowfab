/**
 * mobile-menu.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */

(function($){
  // add items from the top nav to the mobile menu
  // excluding the items with .no-mobile class
  $('.mobile-nav__menu').append($('.top-nav__menu').find('.menu-item').clone());

  // add click function to toggle class
  $('.menu-toggle').click(function() {
    $('.mobile-nav-area').toggleClass('visible');
  });

  // remove class if click outside menu
  $(document).mouseup(function(e) {
    var menuArea = $('.mobile-nav-area');
    var menuButton = $('.menu-toggle');

    // check if menu area is targeted
    if ( !menuArea.is(e.target) && !menuButton.is(e.target) ) {
      $('.mobile-nav-area').removeClass('visible');
    }
  });
}(jQuery));