<?php
require_once('../includes/Common.php');
require_once('../includes/Airport.php');
  $airportID = filter_input(INPUT_GET,'airport',FILTER_SANITIZE_NUMBER_INT);
  $airport = new Airport($airportID);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CS 546 Airport Aggregator Project</title>

    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/global.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/base.css">
  </head>

  <body>

    <div id="airport" class="container">
      <div class="header-wrap">
        <div class="header">
          <nav class="nav-main">
            <ul>
              <li><a href="../home.html">Home</a></li>
              <li><a href="../about.html">About</a></li>
              <li class="airports">
                  <?php Common::airport_nav_dropdown(); ?>
              </li>
              <li><a href="../LoginAndRegister/register.php">Register</a>|<a href="../LoginAndRegister/register.php">Login</a></li>
            </ul>
          </nav>
        </div>
      </div>

        <div class="content-wrap">
          <div class="content-left">
            <nav class="nav-secondary">
              <ul>
                <li><h3><?php echo $airport->name(); ?> International Airport</h3></li>
                <li><a href="airport.php?airport=<?php echo $airport->id(); ?>">Home</a></li>
                <li><a href="history.php?airport=<?php echo $airport->id(); ?>">History</a></li>
                <li><a href="flights.php?airport=<?php echo $airport->id(); ?>">Flights</a></li>
                <li><a href="shopping.php?airport=<?php echo $airport->id(); ?>">Shopping & Food</a></li>
                <li><a href="rentals.php?airport=<?php echo $airport->id(); ?>">Car Rentals</a></li>
                <li><a href="parking.php?airport=<?php echo $airport->id(); ?>">Parking</a></li>
                <li><a href="airlines.php?airport=<?php echo $airport->id(); ?>">Airlines</a></li>
                <li><a href="../Slavik_Code/presentReviews.php?airport=<?php echo $airport->id(); ?>">Reviews</a></li>
                <li><a href="faq.php?airport=<?php echo $airport->id(); ?>">FAQ</a></li>
                <li><a href="contact.php?airport=<?php echo $airport->id(); ?>">Contact</a></li>
              </ul>
            </nav>
          </div>

    <?php

        require_once 'data.php';
        include_once 'includes/db_connect.php';
        include_once 'includes/functions.php';

        sec_session_start();
        $data = new reviewsFormation();
        $exisitng = true;
                  
        $reviewsEntries =  $data->joinTables(); 
        

        
        if (isset($_SESSION["username"])){
         echo '<p> You can <a href="title_content_uploader.php">create your own reviews</a> about any characteristic of the airports.<br> You can <a href="protected_page.php">also update or delete your own reviews.</a></p>';
        }
        
        echo "<p>Click <a href='../home.html'>here</a> to go to the main page.</p>";
        
        if(count($reviewsEntries)!=0){
          foreach ($reviewsEntries as $blog) { 
                
        $airportName = $blog["AirportID"];

        if ($airportName == 1)
          $airportName = "JFK International Airport";

        if ($airportName == 2)
          $airportName = "San Francisco International Airport";  

        if ($airportName == 3)
          $airportName = "Houston George Bush Intercontinental Airport";
          
        if ($airportName == 4)
          $airportName = "Miami International Airport";
          
        if ($airportName == 5)
          $airportName = "Honolulu International Airport";
                               
           echo "By: " . $blog["FirstName"] . " " . $blog["LastName"]. "<br>";
           echo "Airport: " . $airportName . "<br>";
           echo "Date: " . date("m-d-Y", strtotime($blog["Date"])) . "<br>";
           echo "Title: " . $blog["Title"] . "<br>";                    
           echo "Content: " . htmlspecialchars($blog["Content"]) . "<br><br>"; 
        } 

        
                   
    }
          
        
    ?>
    </article>
    <script type="text/javascript" src="checker.js"></script>
</body>

</html>