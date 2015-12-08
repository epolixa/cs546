<!--  reviews.php
      airport reviews page
      Erich
-->

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
                include_once '../includes/db_connect.php';
                include_once '../includes/functions.php';

                sec_session_start();
                $data = new reviewsFormation();
                $exisitng = true;
                $reviewsEntries =  $data->joinTables();

                echo '<h2>Reviews for ' . $airport->name() . '</h2><br>';

                if (isset($_SESSION["username"])){
                 echo '<p><a href="title_content_uploader.php"><span style="font-weight:bold">Submit a new Review for ' . $airport->name() . '</span></a></p><br>';
                 echo '<p><a href="protected_page.php"><span style="font-weight:bold">Go to My Reviews</span></a></p><br>';
                }

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

                   if($blog["AirportID"] == $airport->id())
                   {
                     echo '<div class="review">';
                     echo '<div class="review-header"><span class="review-title">' . $blog["Title"]. '</span>';
                     echo ' by <span class="review-author">' . $blog["FirstName"] . " " . $blog["LastName"] . '</span></div>';
                     echo '<div class="review-date">' . date("m-d-Y", strtotime($blog["Date"])) . '</div><br>';
                     echo '<div class="review-content">' . htmlspecialchars($blog["Content"]) . '</div><br>';
                     echo '<div class="review-rank"><ul>' . $blog["Rank"] . '</ul></div>'; // global.js targets this and adds stars
                     echo '</div><br>';
                   }
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
