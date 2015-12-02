    <?php
     require_once("../includes/Flight.php");
    require_once("../includes/Common.php");
    include_once "header.php";
    ?>

          <div class="content-right">
            <section class="airport-home">
              <h2>Flights of <?php echo $airport->name(); ?> International Airport</h2>
                <br>
                <br>
              <h2>Departures</h2>

                <table>
                <tr>
                  <th>flight_number</th>
                  <th>airline_name</th>
                  <th>destination</th>
                  <th>departure_time</th>
                  <th>arrival_time</th>
                  <th>status</th>
                  <th>origin</th>
                </tr>
                <?php
                    $flights = Common::selectFlights("origin","=",$airport->name());
                if($flights) {
                    foreach ($flights as $flight) {
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
              <h2>Arrivals</h2>
                <table>
                <tr>
                  <th>flight_number</th>
                  <th>airline_name</th>
                  <th>destination</th>
                  <th>departure_time</th>
                  <th>arrival_time</th>
                  <th>status</th>
                  <th>origin</th>
                </tr>
                    <?php
                    $flights = Common::selectFlights("destination","=",$airport->name());
                    foreach($flights as $key=>$flight) {
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
                    ?>
              </table>
            </section>

<?php
  include "footer.php"
?>
