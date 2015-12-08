
        <?php
  require_once('../includes/Airport.php');
  $airportID = filter_input(INPUT_GET,'airport',FILTER_SANITIZE_NUMBER_INT);
  $airport = new Airport($airportID);

?>
            <!DOCTYPE html>

            <html>
            <?php include_once 'head.php' ?>

            <body>
            <div id="reviews" class="container">

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
          <section class="airport-rentals">
            <h2><?php echo $airport->name() ?> International Airport Car Rentals</h2>
            <br>
              <table>
              <tr>
                <th>Company</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Rank</th>
              </tr>
            <?php
        
                require_once 'data.php';
                $data = new reviewsFormation();                
                $rentals =  $data->getRentals($airportID); 
                        
                
                if(count($rentals)!=0){
                  foreach ($rentals as $blog) {
                    $temp = $data->getRentalCompany ($blog["companyid"]);

                    $companyName = $temp[0]; 
                  echo "<tr>";
                  echo "<td>" . $companyName["Name"] . "</td>";
                  echo "<td>" . $blog["carbrand"] . "</td>";
                  echo "<td>" . $blog["price"] . "</td>";
                  echo "<td>" . $blog["quantity"] . "</td>";
                  echo "<td>" . $blog["rank"] . "</td>";
                  echo "</tr>";
                  }
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
