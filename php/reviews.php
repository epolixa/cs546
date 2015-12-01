<?php
  include_once "header.php";
  require_once'../includes/Airport.php';
?>
<div class="content-right">
  <section class="airport-home">
    <?php

        require_once 'data.php';
        include_once '../includes/db_connect.php';
        include_once '../includes/functions.php';

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

 
  </section>
  <script type="text/javascript" src="checker.js"></script>
<?php
  include "footer.php"
?>
