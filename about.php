<!DOCTYPE html>

<html>
  <head>
    <title>CS 546 Airport Aggregator Project</title>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/effects.js"></script>
    <link rel="stylesheet" type="text/css" href="css/base.css">

    <?php
      include_once 'includes/db_connect.php';
      include_once 'includes/functions.php';
      require_once 'php/data.php';

      sec_session_start();
    ?>
  </head>

  <body>
    <div id="about" class="container">
      <div class="header-wrap">
        <?php require_once('includes/Common.php') ?>
        <div class="header">
          <div class="banner">
            <h1 class="title">Airport Aggregator</h1>
            <img class="logo" src="images/airplane-icon.png"/>
          </div>
          <nav class="nav-main">
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li class="airports">
                <?php Common::airport_nav_dropdown(); ?>
              </li>
              <?php
                echo '<li>';
                if(isset($_SESSION["role"]))
                {
                 if($_SESSION["role"] == 0 || $_SESSION["role"] == 1)
                 {
                   echo '<a href="php/protected_page.php">My Page</a> | <a href="php/logout.php">Logout</a>';
                 }
                }
                else
                {
                  echo '<a href="php/register.php">Register</a> | <a href="php/login.php">Login</a>';
                }
                echo '</li>';
              ?>
            </ul>
          </nav>
        </div>
      </div>

        <div class="content-wrap">
          <div class="content">
            <section class="about">
              <h3>What is this site?</h3>
              <p>
                Airport Aggregator provides information for multiple airports
                in one place, making it easy for you to plan your next trip between
                airports.
              </p>
            </section><br>

            <section class="faq">
              <h3>FAQ</h3>
              <ul>
                <li>
                  <span class="question">Is this the FAQ?</span><br>
                  <span class="answer">Yes, this is the FAQ.</span>
                </li>
                <li>
                  <span class="question">How many airports are supported?</span><br>
                  <span class="answer">We currently support five different airports.</span>
                </li>
              </ul>
            </section><br>

            <section class="contact">
              <h3>Contact the team</h3>
              <address>
                <span id="name">Erich Polixa</span>
                <span id="email">epolixa@gmail.com</span>
              </address>
            </section>
          </div>
        </div>

        <div class="footer-wrap">
          <div class="footer">
            <address class="contact">
              <span id="name">Airport Aggregator</span>
              <span id="email">epolixa@gmail.com</span>
            </address>
          </div>
        </div>
    </div>
  </body>
</html>
