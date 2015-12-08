<?php
  require_once'../includes/Airport.php';
?>

<!DOCTYPE html>

<html>
  <?php include_once 'head.php' ?>

  <body>
    <div class="container">

      <?php include_once 'header.php' ?>

      <div class="content-wrap">
        <div class="content">
            <h2>Title and Content Input</h2>

            <div id="validated_title_error">
              <p id="error"></p>
            </div>

            <article>
            <form class="review review-editable" id = "title_content_upload" action = "preview.php" method = "POST">
             Airport: <select required name = "airport_id">
                  <option value = 1> JFK International Airport </option>
                  <option value = 2> San Francisco International Airport </option>
                  <option value = 3> Houston George Bush Intercontinental Airport </option>
                  <option value = 4> Miami International Airport </option>
                  <option value = 5> Honolulu International Airport </option>
                </select><br><br>
             Title: <input type = "text" name = "title" placeholder = "Type title here..." id = "basic_title_query" /> <br>
             Content: <textarea class="review-content" name="content" id="basic_content_query">Type content here...</textarea><br><br>
             Rank: <select required name = "rank">
                  <option value = 1> 1 </option>
                  <option value = 2> 2 </option>
                  <option value = 3> 3 </option>
                  <option value = 4> 4 </option>
                  <option value = 5> 5 </option>
                  <option value = 6> 6 </option>
                  <option value = 7> 7 </option>
                  <option value = 8> 8 </option>
                  <option value = 9> 9 </option>
                  <option value = 10> 10 </option>
                </select><br><br>

             <input class="review-submit" type="submit" value="See Preview"><br>
            </form>
            </article>
        </div>
      </div>

      <?php include_once 'footer.php' ?>

    </div>
  </body>
</html>
