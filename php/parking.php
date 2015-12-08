<!--  parking.php
      airport parking page
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
            <div id="parking" class="container">

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
          <section class="airport-parking">
              <h2>Parking for <?php echo $airport->name() ?> International Airport</h2>
              <p>
                  <?php
                  echo $airport->parking();
                  ?>
              </p>
          </section>
        </div>
      </div>
      <!-- /content -->

      <?php include_once 'footer.php' ?>

    </div>
  </body>
</html>
