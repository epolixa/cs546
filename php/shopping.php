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
          <section class="airport-shopping">
            <h2>Shops of <?php echo $airport->name() ?> International Airport</h2>
              <table>
              <tr>
                <th>id</th>
                <th>name</th>
                <th>security_type</th>
                <th>location</th>
                <th>terminal_id</th>
                <th>airport</th>
              </tr>
              <?php
                  include_once "Database_Connection.php";
                  $sql = "select * from shopping where airport = '$airport'";
                  $result = mysql_query($sql);
                  while($row = mysql_fetch_array($result))
                  {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['security_type']."</td>";
                    echo "<td>".$row['location']."</td>";
                    echo "<td>".$row['terminal_id']."</td>";
                    echo "<td>".$row['airport']."</td>";
                    echo "</tr>";
                  }
                  $history = mysql_fetch_row($result);
                  echo $history[0];
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
