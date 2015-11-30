<?php
  include_once "header.php";
  require_once'../includes/Airport.php';
?>

          <div class="content-right">
            <section class="airport-home">
              <h2><?php echo $airport->name() ?> International Airport</h2>
              <img src="../images/airport.jpg"></img>
              <p>battle beetle in a bottle with a fox in a box</p>
            </section>

<?php
  include "footer.php"
?>

