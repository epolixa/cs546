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
          <section class="airport-reviews">
            <?php
        
                require_once 'data.php';
                $data = new reviewsFormation();                
                $rentals =  $data->getRentals($airportID); 
                        
                echo "<p>Click <a href='../home.html'>here</a> to go to the main page.</p>";
                
                if(count($rentals)!=0){
                    foreach ($rentals as $blog) { 
                            
                    $temp = $data->getRentalCompany ($blog["companyid"]);

                    $companyName = $temp[0];
                    //if($blog["airportid"] ==  )                       
                    echo "Company: " . $companyName["Name"] . "<br>";
                    echo "Brand: " . $blog["carbrand"] . "<br>";
                    echo "Price: " . $blog["price"] . "<br>";
                    echo "Quantity: " . $blog["quantity"] . "<br>";                    
                    echo "Rank: " . $blog["rank"] . "<br><br>"; 
                  } 
                }
            ?>
          </section>
        </div>
      </div>
      <!-- /content -->

      <?php include_once 'footer.php' ?>

    </div>
  </body>
</html>
