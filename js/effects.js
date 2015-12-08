/* Effects
 * mainly jquery UX effects like animations and stuff
 * Erich
 */

$(document).ready(function() {

  /* Main nav dropdown */
  $('.header .nav-main .airports').click(function() {
    $(this).find('ul').slideToggle();
  });

  /* Review stars */
  $('.review .review-rank ul').each(function() {
    var score = parseInt($(this).text());
    $(this).text('');
    for (; score > 0; score--)
      $(this).append('<li class="star">★</li>');
  });

});
