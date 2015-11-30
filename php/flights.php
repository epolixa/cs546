<?php
  include "header.php"
?>

          <div class="content-right">
            <section class="airport-home">
              <h2>Flights of <?php echo $airport ?> International Airport</h2>
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
                    include_once "Database_Connection.php";
                    $sql = "select * from flights where origin = '$airport'";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result))
                    {
                      echo "<tr>";
                      echo "<td>".$row['flight_number']."</td>";
                      echo "<td>".$row['airline_name']."</td>";
                      echo "<td>".$row['destination']."</td>";
                      echo "<td>".$row['departure_time']."</td>";
                      echo "<td>".$row['arrival_time']."</td>";
                      echo "<td>".$row['status']."</td>";
                      echo "<td>".$row['origin']."</td>";
                      echo "</tr>";
                    }
                    $history = mysql_fetch_row($result);
                    echo $history[0];
                ?>
              </table>
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
                    include_once "Database_Connection.php";
                    $sql = "select * from flights where destination = '$airport'";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result))
                    {
                      echo "<tr>";
                      echo "<td>".$row['flight_number']."</td>";
                      echo "<td>".$row['airline_name']."</td>";
                      echo "<td>".$row['destination']."</td>";
                      echo "<td>".$row['departure_time']."</td>";
                      echo "<td>".$row['arrival_time']."</td>";
                      echo "<td>".$row['status']."</td>";
                      echo "<td>".$row['origin']."</td>";
                      echo "</tr>";
                    }
                    $history = mysql_fetch_row($result);
                    echo $history[0];
                ?>
              </table>
            </section>

<?php
  include "footer.php"
?>
