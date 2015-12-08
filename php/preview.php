<!DOCTYPE html>

<html>
  <?php include_once 'head.php' ?>

  <body>
    <div class="container">

      <?php include_once 'header.php' ?>

      <div class="content-wrap">
        <div class="content">

          <h1>Preview Page</h1>

          <div id="validated_title_error">
             <p id="error"></p>
          </div>

          <article>
          <?php

              $title = $_POST["title"];
              $content = $_POST["content"];
              $rank = $_POST["rank"];
              $airport = $_POST["airport_id"];
              $airport_name = "";

              if ($airport == 1)
               $airport_name = "JFK International Airport";

              if ($airport == 2)
               $airport_name = "San Francisco International Airport";

              if ($airport == 3)
               $airport_name = "Houston George Bush Intercontinental Airport";

              if ($airport == 4)
               $airport_name = "Miami International Airport";

              if ($airport == 5)
               $airport_name = "Honolulu International Airport";


              echo '<form id = "title_content_upload" action = "reader.php" method = "POST">';
              echo 'Airport:<select required name = "airport_id"><br>';
              echo '<option selected = "selected">'.$airport_name.' </option>';
              echo '<option value = 1> JFK International Airport </option>';
              echo '<option value = 2> San Francisco International Airport </option>';
              echo '<option value = 3> Houston George Bush Intercontinental Airport </option>';
              echo '<option value = 4> Miami International Airport </option>';
              echo '<option value = 5> Honolulu International Airport </option>';
              echo '</select><br>';
              echo 'Title:<input type = "text" name = "title" placeholder = "Type title here..." id = "basic_title_query"  value = "'.$title.'" /> <br>';
              echo 'Content:<input type = "text" name = "content" placeholder = "Type content here..." id = "basic_content_query" value = "'.$content.'"  style = "width: 350px" /> <br>';
              echo 'Rank:<select required name = "rank" >';
              echo '<option selected = "selected" > '.$rank. ' </option>';
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
              echo ' </select><br>';
              echo '<input type="submit" value="Submit">';
              echo '</form>' ;

              session_start();
              echo '<form id = "back_login" action = "protected_page.php" method = "POST">';
              echo '<input type = "submit" value="Back to Account">';
              echo '</form>';

              echo '<form id = "sign_off" action = "logout.php" method = "POST">';
              echo '<input type = "submit" value="Sign Off">';
              echo '</form>';

          ?>


          </article>

          <script type="text/javascript" src="../js/checker.js"></script>

        </div>
      </div>

      <?php include_once 'footer.php' ?>

    </div>
  </body>
</html>
