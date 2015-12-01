<?php
require_once('../includes/Common.php');
require_once('../includes/Airport.php');
  $airportID = filter_input(INPUT_GET,'airport',FILTER_SANITIZE_NUMBER_INT);
  $airport = new Airport($airportID);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CS 546 Airport Aggregator Project</title>

    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/global.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/base.css">
  </head>

  <body>

    <div id="airport" class="container">
      <div class="header-wrap">
        <div class="header">
          <nav class="nav-main">
            <ul>
              <li><a href="../home.html">Home</a></li>
              <li><a href="../about.html">About</a></li>
              <li class="airports">
                  <?php Common::airport_nav_dropdown(); ?>
              </li>
              <li><a href="../LoginAndRegister/register.php">Register</a>|<a href="../LoginAndRegister/register.php">Login</a></li>
            </ul>
          </nav>
        </div>
      </div>

        <div class="content-wrap">
          <div class="content-left">
            <nav class="nav-secondary">
              <ul>
                <li><h3><?php echo $airport->name(); ?> International Airport</h3></li>
                <li><a href="airport.php?airport=<?php echo $airport->id(); ?>">Home</a></li>
                <li><a href="history.php?airport=<?php echo $airport->id(); ?>">History</a></li>
                <li><a href="flights.php?airport=<?php echo $airport->id(); ?>">Flights</a></li>
                <li><a href="shopping.php?airport=<?php echo $airport->id(); ?>">Shopping & Food</a></li>
                <li><a href="rentals.php?airport=<?php echo $airport->id(); ?>">Car Rentals</a></li>
                <li><a href="parking.php?airport=<?php echo $airport->id(); ?>">Parking</a></li>
                <li><a href="airlines.php?airport=<?php echo $airport->id(); ?>">Airlines</a></li>
                <li><a href="../Slavik_Code/presentReviews.php?airport=<?php echo $airport->id(); ?>">Reviews</a></li>
                <li><a href="faq.php?airport=<?php echo $airport->id(); ?>">FAQ</a></li>
                <li><a href="contact.php?airport=<?php echo $airport->id(); ?>">Contact</a></li>
              </ul>
            </nav>
          </div>
