<?php
  include_once "header.php";
  require_once'../includes/Airport.php';
?>
          <div class="content-right">
            <section class="airport-home">
              <h2>Title and Content Input</h2>

              <div id="validated_title_error">
                <p id="error"></p>
              </div>
              
              <article>
              <form id = "title_content_upload" action = "preview.php" method = "POST">
               Airport:<select required name = "airport_id">
                    <option value = 1> JFK International Airport </option>
                    <option value = 2> San Francisco International Airport </option>
                    <option value = 3> Houston George Bush Intercontinental Airport </option>
                    <option value = 4> Miami International Airport </option>
                    <option value = 5> Honolulu International Airport </option>
                    </select><br>
               Title:<input type = "text" name = "title" placeholder = "Type title here..." id = "basic_title_query" /> <br>
               Content:<input type = "text" name = "content" placeholder = "Type content here..." id = "basic_content_query"  style = "width: 350px" /> <br> 
               Rank:<select required name = "rank">
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
                    </select><br>
                           
               <input type="submit" value="Continue"><br>
              </form>
              </article>

              <article>        
              <?php
                echo '<form id = "back" action = "protected_page.php" method = "POST">';         
                echo '<input type = "submit" value="Back to Account">';            
                echo '</form>';

                echo '<form id = "sign_off" action = "includes/logout.php" method = "POST">';         
                echo '<input type = "submit" value="Logout">';           
                echo '</form>';
              ?>
             </article>
            
            </section>

<?php
  include "footer.php"
?>
