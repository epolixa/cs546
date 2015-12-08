<!DOCTYPE html>

<html>
  <head>
    <title>CS 546 Airport Aggregator Project</title>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/effects.js"></script>
    <link rel="stylesheet" type="text/css" href="css/base.css">
  </head>

  <body>
    <div id="about" class="container">
      <div class="header-wrap">
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
            </ul>
          </nav>
        </div>
      </div>

        <div class="content-wrap">
          <div class="content">
            <section class="about">
              <p>
                We have no limits to our world. We're only limited by our
                imagination. Every time you practice, you learn more All you
                need to paint is a few tools, a little instruction, and a
                vision in your mind. Just beat the devil out of it. Let all
                these little things happen. Don't fight them. Learn to use them.
                You want your tree to have some character. Make it special.

                These things happen automatically. All you have to do is just
                let them happen. And just raise cain. Let's go up in here, and
                start having some fun We're not trying to teach you a thing to
                copy. We're just here to teach you a technique, then let you
                loose into the world. In this world, everything can be happy.
              </p>
            </section>

            <section class="faq">
              <ul>
                <li>
                  <h2>Is this the FAQ?</h2>
                  <p>Yes, this is the FAQ.</p>
                </li>
                <li>
                  <h2>How much wood could a woodchuck chuck?</h2>
                  <p>About three fifty.</p>
              </ul>
            </section>

            <section class="contact">
              <address>
                <span id="name">Airport Aggregator</span>
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
