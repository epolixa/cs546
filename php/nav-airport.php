<!--  nav-airport.php
      secondary left navigation on airport pages
      Erich
-->

<nav class="nav-secondary">

  <!-- $airport initialized in parent -->

  <ul>
    <li><h3><a href="airport.php?airport=<?php echo $airport->id(); ?>"><?php echo $airport->name(); ?></a></h3></li>
    <li><a href="flights.php?airport=<?php echo $airport->id(); ?>">Flights</a></li>
    <li><a href="shopping.php?airport=<?php echo $airport->id(); ?>">Shopping & Food</a></li>
    <li><a href="rentals.php?airport=<?php echo $airport->id(); ?>">Car Rentals</a></li>
    <li><a href="parking.php?airport=<?php echo $airport->id(); ?>">Parking</a></li>
    <li><a href="airlines.php?airport=<?php echo $airport->id(); ?>">Airlines</a></li>
    <li><a href="reviews.php?airport=<?php echo $airport->id(); ?>">Reviews</a></li>
    <li><a href="faq.php?airport=<?php echo $airport->id(); ?>">FAQ</a></li>
    <li><a href="contact.php?airport=<?php echo $airport->id(); ?>">Contact</a></li>
  </ul>
</nav>
