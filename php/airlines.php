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
            <h2>Flights of <?php echo $airport->name(); ?> International Airport</h2>
              <br>
              <br>

              <table>
              <tr>
                <th>Id</th>
                <th>Airline_Name</th>
                <th>Contact</th>
              </tr>
              <?php
                  $airlines = DatabaseConnection::send_sql("SELECT * FROM airlines");
              if($airlines) {
                  foreach ($airlines as $airline) {
                      echo "<tr>";
                      echo "<td>" . $flight->flight_number() . "</td>";
                      echo "<td>" . $flight->airline_name() . "</td>";
                      echo "<td>" . $flight->destination() . "</td>";
                      echo "<td>" . $flight->departure_time() . "</td>";
                      echo "<td>" . $flight->arrival_time() . "</td>";
                      echo "<td>" . $flight->status() . "</td>";
                      echo "<td>" . $flight->origin() . "</td>";
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
