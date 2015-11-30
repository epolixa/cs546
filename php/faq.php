<?php
include_once "header.php";
?>
<div class="content-right">
    <section class="airport-home">
        <h2>FAQ for <?php echo $airport->name() ?> International Airport</h2>
        <p>
            <?php
            echo $airport->FAQ();
            ?>
        </p>
    </section>

    <?php
    include "footer.php"
    ?>
