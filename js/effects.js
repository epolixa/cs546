/* Effects
 * mainly jquery UX effects like animations and stuff
 * Erich
 */

$(document).ready(function() {

  /* Main nav dropdown */
  $('.header .nav-main .airports').click(function() {
    $(this).find('ul').slideToggle();
  });

});
