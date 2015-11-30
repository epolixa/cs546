<?php
  $airport = $_GET['airport'];
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
                <span>Airports</span>
                <ul>
                  <li><a href="airport.php?airport=JFK">JFK International Airport</a></li>
                  <li><a href="airport.php?airport=SanFrancisco">San Francisco International Airport</a></li>
                  <li><a href="airport.php?airport=Miami">Miami Airport</a></li>
                  <li><a href="airport.php?airport=HGB">Houston George Bush International Airport</a></li>
                  <li><a href="airport.php?airport=Honolulu">Honolulu International Airport</a></li>
                </ul>
              </li>
              <li><a href="LoginAndRegister/register.php">Register</a>|<a href="LoginAndRegister/register.php">Login</a></li>
            </ul>
          </nav>
        </div>
      </div>

        <div class="content-wrap">
          <div class="content-left">
            <nav class="nav-secondary">
              <ul>
                <li><h3><?php echo $airport ?> International Airport</h3></li>
                <li><a href="airport.php?airport=<?php echo $airport ?>">Home</a></li>
                <li><a href="history.php?airport=<?php echo $airport ?>">History</a></li>
                <li><a href="flights.php?airport=<?php echo $airport ?>">Flights</a></li>
                <li><a href="shopping.php?airport=<?php echo $airport ?>">Shopping & Food</a></li>
                <li><a href="rentals.php?airport=<?php echo $airport ?>">Car Rentals</a></li>
                <li><a href="parking.php?airport=<?php echo $airport ?>">Parking</a></li>
                <li><a href="airlines.php?airport=<?php echo $airport ?>">Airlines</a></li>
                <li><a href="reviews.php?airport=<?php echo $airport ?>">Reviews</a></li>
                <li><a href="faq.php?airport=<?php echo $airport ?>">FAQ</a></li>
                <li><a href="contact.php?airport=<?php echo $airport ?>">Contact</a></li>
              </ul>
            </nav>
          </div>
