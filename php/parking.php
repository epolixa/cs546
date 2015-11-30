<?php
include_once "header.php";
require_once'../includes/Airport.php';
?>
<div class="content-right">
    <section class="airport-home">
        <h2>Parking for <?php echo $airport->name() ?> International Airport</h2>
        <p>
            <?php
            echo $airport->parking();
            ?>
        </p>
    </section>

    <?php
    include "footer.php"
    ?>
