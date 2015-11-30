<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
</head>

<body>
    <h1> Reviews Page </h1>
    <div id="validated_title_error">
       <p id="error"></p>
    </div>
    <article>        
    <?php
        
        require_once 'data.php';
        $data = new reviewsFormation();
        $exisitng = true;
                  
        $reviewsEntries =  $data->joinTables(); 
          
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