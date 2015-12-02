<?php


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reviews Adminstrator Settings</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>

      <h1> Reviews Adminstrator Settings </h1>

      <article>
        <?php 
            
            require_once 'data.php';
              
            $data = new reviewsFormation();
            $reviewEntries =  $data->joinTables();
               
            if(count($reviewEntries)!=0){
              foreach ($reviewEntries as $blog){

                   if ($blog["AirportID"] == 1)
                     $airportName = "JFK International Airport"; 
        
                   if ($blog["AirportID"] == 2)
                     $airportName = "San Francisco International Airport";
                        
                   if ($blog["AirportID"] == 3)
                     $airportName = "Houston George Bush Intercontinental Airport";
                      
                   if ($blog["AirportID"] == 4)  
                     $airportName = "Miami International Airport";
                      
                   if ($blog["AirportID"] == 5)
                     $airportName = "Honolulu International Airport";
                       
                      echo "By: " . $blog["FirstName"] . $blog["LastName"] . "<br>";
                      echo "Date: " . date("m-d-Y", strtotime($blog["Date"])) . "<br>";
                      echo '<form id = "title_content_upload" action = "update_delete_status.php" method = "POST" ">';
                      echo '<input type = "hidden" name = review_id  id = "basic_review_query" value = "'.$blog["ID"].'"  style = "width: 350px" /> ';
                      echo '<input type = "hidden" name = "status"  id = "basic_status_query" value = 2  style = "width: 350px" /> ';                      
                      echo 'Title:<input type = "text" name = "title" placeholder = "Type title here..." id = "basic_title_query"  value = "'.$blog["Title"].'" /> <br>';
                      echo 'Content:<input type = "text" name = "content" placeholder = "Type content here..." id = "basic_content_query" value = "'.$blog["Content"].'"  style = "column-width: 350px"/> <br>';    
                      echo '<input type="submit" value="Delete" onclick = "return deleteConfirmation();">';
                      echo '</form><br><br>' ;
                   }
                  } 

                echo '<form id = "back_login" action = "protected_page.php" method = "POST">';         
                echo '<input type = "submit" value="Back to Account">';
                echo '</form>';

                echo '<form id = "sign_off" action = "includes/logout.php" method = "POST">';         
                echo '<input type = "submit" value="Logout">';           
                echo '</form>';

             
              ?> 
            </article>

      <script> 
          
          function deleteConfirmation(){ return confirm("Do you really want to delete this review ?")} 
              
      </script>  
    </body>
</html>