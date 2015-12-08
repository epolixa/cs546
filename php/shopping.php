<!--  shopping.php
      airport shopping & food page
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
            <div id="shopping" class="container">

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

          <section class="airport-shopping">
            <h2>Shops of <?php echo $airport->name() ?> International Airport</h2>
              <table>
              <tr>
                <th>Name</th>
                <th>Pre/Post Security</th>
                <th>Location</th>
                <th>Terminal</th>
              </tr>
              <?php
                  $shops = Common::selectShops("airport","=",$airport->name());
              if($shops && count($shops)>0) {
                foreach ($shops as $shop) {
                  echo "<tr>";
                  echo "<td>" . $shop->name() . "</td>";
                  echo "<td>" . $shop->security_type() . "</td>";
                  echo "<td>" . $shop->location() . "</td>";
                  echo "<td>" . $shop->terminal() . "</td>";
                  echo "</tr>";
                }
              }else{
                echo"<tr><td colspan='4'><center>There aren't any shops at this time.</center></td></tr> ";
              }
              ?>
            </table>
          </section>
        </div>
      </div>
      <!-- /content -->

      <?php include_once 'footer.php' ?>

    </div>
  </body>
</html>
