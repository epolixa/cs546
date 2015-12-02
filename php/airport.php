<!--  airport.php
      airport landing page
      Erich
-->
<?php
  require_once('../includes/Airport.php');
  $airportID = filter_input(INPUT_GET,'airport',FILTER_SANITIZE_NUMBER_INT);
  $airport = new Airport($airportID);
?>

<!DOCTYPE html>

<html>
  <?php include_once 'head.php' ?>

  <body>
    <div id="airport" class="container">

      <?php include_once 'header.php' ?>

      <!-- page content -->
      <div class="content-wrap">
        <div class="content-left">
          <?php include_once 'nav-airport.php' ?>
        </div>
        <div class="content-right">
          <section class="airport-home">
            <h2><?php echo $airport->name() ?></h2>
            <img src="../images/airport.jpg"></img>
            <p>battle beetle in a bottle with a fox in a box</p>
          </section>
          <section class="airport-history">
            <h2>History of <?php echo $airport->name() ?> International Airport</h2>
            <p>
              <?php echo $airport->history(); ?>
            </p>
          </section>
          <section class="airport-links">
            <ul>
              <li><a href="flights.php?airport=<?php echo $airport->id(); ?>">Flights</a></li>
              <li><a href="shopping.php?airport=<?php echo $airport->id(); ?>">Shopping & Food</a></li>
              <li><a href="rentals.php?airport=<?php echo $airport->id(); ?>">Car Rentals</a></li>
              <li><a href="parking.php?airport=<?php echo $airport->id(); ?>">Parking</a></li>
              <li><a href="airlines.php?airport=<?php echo $airport->id(); ?>">Airlines</a></li>
              <li><a href="reviews.php?airport=<?php echo $airport->id(); ?>">Reviews</a></li>
              <li><a href="faq.php?airport=<?php echo $airport->id(); ?>">FAQ</a></li>
              <li><a href="contact.php?airport=<?php echo $airport->id(); ?>">Contact</a></li>
            </ul>
          </section>
        </div>
      </div>
      <!-- /content -->

      <?php include_once 'footer.php' ?>

    </div>
  </body>
</html>
