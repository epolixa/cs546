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
          <section class="airport-flights">
            <h2>Airlines of <?php echo $airport->name(); ?> International Airport</h2>
              <br>
              <br>

              <table>
              <tr>
                <th>Id</th>
                <th>Airline_Name</th>
                <th>Contact</th>
              </tr>
              <?php
                  $airlines = Common::selectAirlines("ata.airportid", "=", "$airportID");
              if($airlines) {
                  foreach ($airlines as $airline) {
                      echo "<tr>";
                      echo "<td>" . $airline['id'] . "</td>";
                      echo "<td>" . $airline['name'] . "</td>";
                      echo "<td>" . $airline['contact'] . "</td>";
                      echo "</tr>";
                  }
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
