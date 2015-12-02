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
<!--  header.php
      header structure
      Erich
-->

<div class="header-wrap">
  <?php require_once('../includes/Common.php') ?>

  <div class="header">
    <nav class="nav-main">
      <ul>
        <li><a href="../home.html">Home</a></li>
        <li><a href="../about.html">About</a></li>
        <li class="airports">
            <?php Common::airport_nav_dropdown(); ?>
        </li>
        <li>
          <a href="./register.php">Register</a>
          |
          <a href="./login.php">Login</a>
        </li>
      </ul>
    </nav>
  </div>
</div>
