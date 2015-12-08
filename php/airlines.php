<!--  airport.php
      airport flights page
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
<div id="flights" class="container">

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
              <section class="airport-flights"><h2>Airlines of <?php echo $airport->name(); ?> International Airport</h2>
              <br>
              <br>

              <table>
              <tr>
                <th>Name</th>
                  <th>Terminal</th>
                <th>Contact</th>
              </tr>
              <?php
                  $airlines = Common::selectAirlines("ata.airportid", "=", "$airportID", "ata.`terminalid`");
              if($airlines && count($airlines)>0) {
                  foreach ($airlines as $airline) {
                      echo "<tr>";
                      echo "<td>" . $airline['name'] . "</td>";
                      echo "<td>" . $airline['terminal'] . "</td>";
                      echo "<td>" . $airline['contact'] . "</td>";
                      echo "</tr>";
                  }
              }else{
                  echo"<tr><td colspan='3'><center>There aren't any Airlines at this time.</center></td></tr> ";
              }
              ?>
            </table>
              <br><br>
          </section>
        </div>
      </div>
      <!-- /content -->

      <?php include_once 'footer.php' ?>

    </div>
  </body>
</html>
