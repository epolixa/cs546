<!DOCTYPE html>

<html>
  <head>
    <title>CS 546 Airport Aggregator Project</title>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/effects.js"></script>
    <link rel="stylesheet" type="text/css" href="css/base.css">
  </head>

  <body>
    <div id="home" class="container">
      <div class="header-wrap">
        <div class="header">
          <div class="banner">
            <h1 class="title">Airport Aggregator</h1>
            <img class="logo" src="../images/airplane-icon.png"/>
          </div>
          <nav class="nav-main">
            <ul>
              <li><a href="home.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li class="airports">
                <span>Airports</span>
                <ul>
                  <li><a href="php/airport.php?airport=1">JFK International Airport</a></li>
                  <li><a href="php/airport.php?airport=2">San Francisco International Airport</a></li>
                  <li><a href="php/airport.php?airport=3">Miami Airport</a></li>
                  <li><a href="php/airport.php?airport=4">Houston George Bush International Airport</a></li>
                  <li><a href="php/airport.php?airport=5">Honolulu International Airport</a></li>
                </ul>
              </li>
              <li>
                <a href="./php/register.php">Register</a>
                |<a href="./php/login.php">Login</a>
              </li>
              <li><a href="php/protected_page.php">My Page</a></li>
            </ul>
          </nav>
        </div>
      </div>

        <div class="content-wrap">
          <div class="content">
            <section class="main-airports">
              <ul>
                <li class="airport-li">
                  <a href="php/airport.php?airport=1">
                    <h3 class="airport-title">JFK International Airport</h3>
                    <img class="airport-img" src="images/airport.jpg"></img>
                  </a>
                </li>
                <li class="airport-li">
                  <a href="php/airport.php?airport=2">
                    <h3 class="airport-title">San Francisco International Airport</h3>
                    <img class="airport-img" src="images/airport.jpg"></img>
                  </a>
                </li>
                <li class="airport-li">
                  <a href="php/airport.php?airport=3">
                    <h3 class="airport-title">Miami Airport</h3>
                    <img class="airport-img" src="images/airport.jpg"></img>
                  </a>
                </li>
                <li class="airport-li">
                  <a href="php/airport.php?airport=4">
                    <h3 class="airport-title">Houston George Bush International Airport</h3>
                    <img class="airport-img" src="images/airport.jpg"></img>
                  </a>
                </li>
                <li class="airport-li">
                  <a href="php/airport.php?airport=5">
                    <h3 class="airport-title">Honolulu International Airport</h3>
                    <img class="airport-img" src="images/airport.jpg"></img>
                  </a>
                </li>
              </ul>
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
