<?php
  include_once "header.php";
  require_once'../includes/Airport.php';
?>
<div class="content-right">
  <section class="airport-home">
    <?php
        
        require_once 'data.php';
        $data = new reviewsFormation();                
        $airportID = 2;
        $rentals =  $data->getRentals($airportID); 
                
        echo "<p>Click <a href='../home.html'>here</a> to go to the main page.</p>";
        
        if(count($rentals)!=0){
          foreach ($rentals as $blog) { 
                
        $temp = $data->getRentalCompany ($blog["companyid"]);

        $companyName = $temp[0];
                               
        echo "Company: " . $companyName["Name"] . "<br>";
        echo "Brand: " . $blog["carbrand"] . "<br>";
        echo "Price: " . $blog["price"] . "<br>";
        echo "Quantity: " . $blog["quantity"] . "<br>";                    
        echo "Rank: " . $blog["rank"] . "<br><br>"; 
      } 
    ?>
 
  </section>
  <script type="text/javascript" src="checker.js"></script>
<?php
  include "footer.php"
?>

