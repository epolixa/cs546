
<!DOCTYPE html>
<html>

<head>
    <title>Blog Creation Result</title>
</head>

<body>
    <h1>Blog Submittion Status</h1>

    <article>        
    <?php
        
        require_once 'data.php';
        include_once '../includes/db_connect.php';
        include_once '../includes/functions.php'; 
        $data = new reviewsFormation();
        $succeeded = false;
        
        
       if(isset($_POST["title"]) && isset($_POST["content"]) && isset($_POST["rank"])){
        
        $title = strip_tags($_POST["title"]);   
        $content = strip_tags($_POST["content"]);
        $rank = $_POST["rank"]; 
        $airportName = $_POST["airport_id"];
        $userid = 1; 
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
          
 
         sec_session_start();

         $username = $_SESSION['username'];
                
         $userDetails = $data->getUsersDetails($username);
        
         $userID = $userDetails[0];
         

        if(isset($userID["id"]))
         $succeeded = $data->addBlogEntry($title,$content,$rank,$airport_id,$userID["id"]);

        if(!$succeeded)
          echo "Failure adding a new review!!!";

        }

        echo '<form id = "back_login" action = "protected_page.php" method = "POST">';         
        echo '<input type = "submit" value="Back to Account">';
        echo '</form>';

        echo '<form id = "sign_off" action = "includes/logout.php" method = "POST">';         
        echo '<input type = "submit" value="Sign Off">';           
        echo '</form>';

    ?>
    </article>
</body>

</html>