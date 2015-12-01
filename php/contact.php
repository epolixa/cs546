<?php
include_once "header.php";
?>
<div class="content-right">
    <section class="airport-home">
        <h2>Contact Info for <?php echo $airport->name() ?> International Airport</h2>
        <p>
            <?php
            echo $airport->contact();
            ?>
        </p>
    </section>

    <?php
    include "footer.php"
    ?>
