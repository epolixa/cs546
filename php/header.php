<!--  header.php
      header structure
      Erich
-->

<div class="header-wrap">
  <?php require_once('../includes/Common.php') ?>

  <div class="header">
    <div class="banner">
      <h1 class="title">Airport Aggregator</h1>
      <img class="logo" src="../images/airplane-icon.png"/>
    </div>
    <nav class="nav-main">
      <ul>
        <li><a href="../home.php">Home</a></li>
        <li><a href="../about.php">About</a></li>
        <li class="airports">
            <?php Common::airport_nav_dropdown(); ?>
        </li>
        <?php
          echo '<li>';
          if(isset($_SESSION["role"]))
          {
           if($_SESSION["role"] == 0 || $_SESSION["role"] == 1)
           {
             echo '<a href="protected_page.php">My Page</a> | <a href="./logout.php">Logout</a>';
           }
          }
          else
          {
            echo '<a href="./register.php">Register</a> | <a href="./login.php">Login</a>';
          }
          echo '</li>';
        ?>
      </ul>
    </nav>
  </div>
</div>
