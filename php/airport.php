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


                    <?php
                    if(!$airport->exists())
                        Common::error("Error: Airport could not be found!");
                    ?>
                    <section class="airport-home">
                  <h2><?php echo $airport->name(); ?></h2><br>
            <?php echo '<img src="../images/airport-' . $airport->id() . '.jpg"></img>'; ?>
          </section>
          <section class="airport-history">
            <p><?php echo $airport->history(); ?></p><br>
          </section>
          <section class="airport-links">
            <ul>
              <li class="button"><a href="flights.php?airport=<?php echo $airport->id(); ?>">Flights</a></li>
              <li class="button"><a href="shopping.php?airport=<?php echo $airport->id(); ?>">Shopping & Food</a></li>
              <li class="button"><a href="rentals.php?airport=<?php echo $airport->id(); ?>">Car Rentals</a></li>
              <li class="button"><a href="parking.php?airport=<?php echo $airport->id(); ?>">Parking</a></li>
              <li class="button"><a href="airlines.php?airport=<?php echo $airport->id(); ?>">Airlines</a></li>
              <li class="button"><a href="reviews.php?airport=<?php echo $airport->id(); ?>">Reviews</a></li>
              <li class="button"><a href="faq.php?airport=<?php echo $airport->id(); ?>">FAQ</a></li>
              <li class="button"><a href="contact.php?airport=<?php echo $airport->id(); ?>">Contact</a></li>
            </ul>
          </section>
        </div>
      </div>
      <!-- /content -->

      <?php include_once 'footer.php' ?>

    </div>
  </body>
</html>
