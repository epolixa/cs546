<!DOCTYPE html>
<html>

<head>
    <title>Review Status</title>
</head>

<body>
    <h1>Review Status</h1>

    <article>        
    <?php
        
        require_once 'data.php';
        include_once 'includes/db_connect.php';
        include_once 'includes/functions.php'; 
        $data = new reviewsFormation();
        $succeeded = false;
        
       //echo $_POST["status"] . "<br>";
       //echo $_POST["title"] . "<br>";
       //echo $_POST["content"] . "<br>";
       //echo $_POST["rank"] . "<br>";
       //echo $_POST["review_id"] . "<br>";
       //echo $_POST["airport_id"] . "<br>";

        if(isset($_POST["status"]) && ($_POST["status"] == 1)) 
         if(isset($_POST["title"]) && isset($_POST["content"]) && isset($_POST["rank"]) && isset($_POST["review_id"]) && isset($_POST["airport_id"])){
        
        
        
        $title = strip_tags($_POST["title"]);   
        $content = strip_tags($_POST["content"]);
        $rank = $_POST["rank"]; 
        $airportName = $_POST["airport_id"];
        $review_id = $_POST["review_id"];
        $airport_id = 0;
       
        

        if ($airportName == "JFK International Airport")
          $airport_id = 1;
        
        if ($airportName == "San Francisco International Airport")
          $airport_id = 2;
        
        if ($airportName == "Houston George Bush Intercontinental Airport")
          $airport_id = 3;
        
        if ($airportName == "Miami International Airport")
          $airport_id = 4;
        
        if ($airportName =="Honolulu International Airport")
          $airport_id = 5;
        
        if ($airportName == 1)
          $airport_id = 1;

        if ($airportName == 2)
          $airport_id = 2;

        if ($airportName == 3)
          $airport_id = 3;

        if ($airportName == 4)
          $airport_id = 4;

        if ($airportName == 5)
          $airport_id = 5;
          
                 
         $succeeded = $data->updateBlogEntry($title,$content,$rank,$airport_id,$review_id);
        
                  
        if(!$succeeded)
          echo "Failure updating your review!!!<br>";

        }

         if($_POST["status"] == 2){
          
          $succeeded = false; 
          $succeeded = $data->deleteReview($_POST["review_id"]);

          if(!$succeeded)
           echo "Failure deleting your review!!!<br>";
          else
           echo "The review was deleted!!!<br>"; 
        }

        echo '<form id = "back_login" action = "protected_page.php" method = "POST">';         
        echo '<input type = "submit" value="Back to Account">';
        echo '</form>';

        echo '<form id = "sign_off" action = "includes/logout.php" method = "POST">';         
        echo '<input type = "submit" value="Logout">';           
        echo '</form>';

    ?>
    </article>
</body>

</html>