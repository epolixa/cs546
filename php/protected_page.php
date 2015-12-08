<?php
  include_once '../includes/db_connect.php';
  include_once '../includes/functions.php';
  require_once 'data.php';

  sec_session_start();
?>

<!DOCTYPE html>

<html>
  <?php include_once 'head.php' ?>

  <body>
    <div class="container">

      <?php include_once 'header.php' ?>

      <!-- page content -->
      <div class="content-wrap">
        <div class="content">
          <?php if (login_check($mysqli) == true) : ?>
              <p>Welcome <span style="color: #5B9DDE; font-weight: bold;"><?php echo htmlentities($_SESSION['username']); ?></span>!</p><br>
              <p class="notice">
                  This is an example protected page.  To access this page, users
                  must be logged in.  At some stage, we'll also check the role of
                  the user, so pages will be able to determine the type of user
                  authorized to access the page.
              </p><br>

              <article> <?php

                 $data = new reviewsFormation();
                 $username = $_SESSION["username"];

                 $temp = true;
                 $existing = $data->getUsersDetails($username);

                 $reviewEntries =  $data->joinTables();

                 if(isset($_SESSION["role"]))
                  if($_SESSION["role"] == 0){
                       echo '<p><a href="title_content_uploader.php"><span style="font-weight:bold">Submit a new Review</span></a></p><br>';
                       echo '<p>Review History:</p><br>';
                  }

                 if(isset($_SESSION["role"]))
                  if($_SESSION["role"] == 1) {
                    echo "<p>You are logged as administrator.</p>";
                    echo "<p>To access reviews management click <a href= 'reviewsAdmin.php'> here.</a></p>";
                    echo "<p>To access users management click <a href= 'adminUsers.php'> here.</a></p>";
                    echo "<p>To access flights management click <a href= 'flightsAdmin.php'> here.</a></p>";
                  }
                 if (($existing != false) && ($existing != null) && ($_SESSION["role"] == 0))
                  if(count($reviewEntries)!=0){
                   $entry = $existing[0];
                   foreach ($reviewEntries as $blog)
                      if ($entry["id"] == $blog["userID"]){

                       if ($temp){
                        //echo 'The following are your reviews:<br><br>';
                        $temp = false;
                       }

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

                        echo '<div class="review review-editable">';
                        echo 'Author: ' . $username . ' <br>';
                        echo 'Date: ' . date("m-d-Y", strtotime($blog["Date"])) . '<br><br>';
                        echo '<form id = "title_content_upload" action = "update_delete_status.php" method = "POST" ">';
                        echo '<input type = "hidden" name = review_id  id = "basic_review_query" value = "'.$blog["ID"].'"  style = "width: 350px" /> ';
                        echo '<input type = "hidden" name = "status"  id = "basic_status_query" value = 1  style = "width: 350px" /> ';

                        echo 'Airport: <select required name = "airport_id">';
                        echo '<option selected = "selected">'.$airportName.'</option>';
                        echo '<option value = 1> JFK International Airport </option>';
                        echo '<option value = 2> San Francisco International Airport </option>';
                        echo '<option value = 3> Houston George Bush Intercontinental Airport </option>';
                        echo '<option value = 4> Miami International Airport </option>';
                        echo '<option value = 5> Honolulu International Airport </option>';
                        echo '</select><br><br>';

                        echo 'Title: <input type = "text" name = "title" placeholder = "Type title here..." id = "basic_title_query"  value = "'.$blog["Title"].'" /> <br>';
                        echo 'Content: <textarea class="review-content" name="content" id="basic_content_query">' . $blog["Content"] . '</textarea><br><br>';

                        echo 'Rank: <select required name = "rank">';
                        echo '<option selected = "selected">'.$blog["Rank"].'</option>';
                        echo '<option value = 1> 1 </option>';
                        echo '<option value = 2> 2 </option>';
                        echo '<option value = 3> 3 </option>';
                        echo '<option value = 4> 4 </option>';
                        echo '<option value = 5> 5 </option>';
                        echo '<option value = 6> 6 </option>';
                        echo '<option value = 7> 7 </option>';
                        echo '<option value = 8> 8 </option>';
                        echo '<option value = 9> 9 </option>';
                        echo '<option value = 10> 10 </option>';
                        echo '</select><br>';
                        echo '<input class="review-update" type="submit" value="Update Review" onclick = "return updateConfirmation();">';
                        echo '</form>';

                        echo '<form id = "delete" class="review-delete" action = "update_delete_status.php" method = "POST" onsubmit = "return deleteConfirmation()">';
                        echo '<input type = "hidden" name = "status"  id = "basic_status_query" value = 2  style = "width: 350px" /> ';
                        echo '<input type = "hidden" name = "review_id"  id = "basic_review_query" value = "'.$blog["ID"].'"  style = "width: 350px" /> ';
                        echo '<input type="submit" value="Delete Review">';
                        echo '</form>';
                        echo '</div><br>';
                     }
                    }




                ?>
              </article>

          <?php else : ?>
              <p class="warning">
                  You are not authorized to access this page. Please <a href="index.php">login</a>.
              </p>
          <?php endif; ?>
          <script type = "text/javascript" src="checker.js"></script>
          <script> function deleteConfirmation(){ return confirm("Do you really want to delete this review ?")}
                function updateConfirmation(){ return confirm("Do you want to update this review ?")}
          </script>
        </div>
      </div>
      <!-- /content -->

      <?php include_once 'footer.php' ?>

    </div>
  </body>
</html>
