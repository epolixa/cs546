<?php
  include "header.php"
?>

          <div class="content-right">
            <section class="airport-home">
              <h2>History of <?php echo $airport ?> International Airport</h2>
              <p>
                <?php
                    include_once "Database_Connection.php";
                    $sql = "select faq from airports where name = '$airport'";
                    $result = mysql_query($sql);
                    $row = mysql_fetch_array($result);
                    echo $row['faq'];
                ?>
              </p>
            </section>

<?php
  include "footer.php"
?>
