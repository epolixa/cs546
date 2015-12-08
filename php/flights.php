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
            <h1>Flights of <?php echo $airport->name(); ?> International Airport</h1>
              <br>
              <br>
            <h2>Departures</h2>

              <table>
              <tr>
                  <th>Flight Number</th>
                  <th>Origin</th>
                  <th>Destination</th>
                  <th>Airline</th>
                  <th>Departure Time</th>
                  <th>Arrival Time</th>
                  <th>Status</th>
              </tr>
              <?php
                  $flights = Common::selectFlights("origin","=",$airport->name());
              if($flights && count($flights)>0) {
                  foreach ($flights as $flight) {
                      echo "<tr>";
                      echo "<td>" . $flight->flight_number() . "</td>";
                      echo "<td>" . $flight->origin() . "</td>";
                      echo "<td>" . $flight->destination() . "</td>";
                      echo "<td>" . $flight->airline_name() . "</td>";
                      echo "<td>" . $flight->departure_time() . "</td>";
                      echo "<td>" . $flight->arrival_time() . "</td>";
                      echo "<td>" . $flight->status() . "</td>";
                      echo "</tr>";
                  }
              }else{
                  echo"<tr><td colspan='7'><center>There aren't any departures at this time.</center></td></tr> ";
              }
              ?>
            </table>
              <br><br>
            <h2>Arrivals</h2>
              <table>
                  <tr>
                      <th>Flight Number</th>
                      <th>Origin</th>
                      <th>Destination</th>
                      <th>Airline</th>
                      <th>Departure Time</th>
                      <th>Arrival Time</th>
                      <th>Status</th>

                  </tr>
                  <?php
                  $flights = Common::selectFlights("destination","=",$airport->name());
                  if($flights && count($flights)>0){
                      foreach($flights as $flight) {
                          echo "<tr>";
                          echo "<td>" . $flight->flight_number() . "</td>";
                          echo "<td>" . $flight->origin() . "</td>";
                          echo "<td>" . $flight->destination() . "</td>";
                          echo "<td>" . $flight->airline_name() . "</td>";
                          echo "<td>" . $flight->departure_time() . "</td>";
                          echo "<td>" . $flight->arrival_time() . "</td>";
                          echo "<td>" . $flight->status() . "</td>";
                          echo "</tr>";
                      }
                  }else{
                    echo"<tr><td colspan='7'><center>There aren't any arrivals at this time.</center></td></tr> ";
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
