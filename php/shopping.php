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
                  $shops = Common::selectShops("airport","=",$airport->name());
                  // $sql = "select * from shopping where airport = " . $airport->id() . "";
                  // $result = mysql_query($sql);
                  while($shops)
                  {
                    echo "<tr>";
                    echo "<td>".$shops['id']."</td>";
                    echo "<td>".$shops['name']."</td>";
                    echo "<td>".$shops['security_type']."</td>";
                    echo "<td>".$shops['location']."</td>";
                    echo "<td>".$shops['terminal_id']."</td>";
                    echo "<td>".$shops['airport']."</td>";
                    echo "</tr>";
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
