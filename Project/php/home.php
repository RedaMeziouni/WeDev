<!DOCTYPE html>
<html lang="en">
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WeDev | Tech Leader</title>
</head>

<body>
    <!-- header -->
    <header class="main-header">
    <nav class="transparent">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">WeDev</a>
          <a href="#" data-activates="mobile-nav" class="button-collapse">
            <i class="fa fa-bars"></i>
          </a>
          <!-- Log in / Sign Up / Our Solutions -->
          <ul class="right hide-on-med-and-down">
            <li>
              <a class="active-link" href="Home.php">Home</a>
            </li>
            <li>
              <a href="solutions.php">Solutions</a>
            </li>
            <!-- Social media links -->
            <li>
              <a href="https://facebook.com">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://instagram.com">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
          <ul class="side-nav" id="mobile-nav">
            <h4 class="purple-text text-darken-4 center">WeDev</h4>
            <li>
              <div class="divider"></div>
            </li>
            <li>
              <a href="Home.php">
                <i class="fa fa-home grey-text text-darken-4"></i> Home</a>
            </li>
            <li>
              <a href="solutions.php">
                <i class="fa fa-cog grey-text text-darken-4"></i> Solutions</a>
            </li>
            <li>
              <div class="divider"></div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Showcase -->
    <div class="showcase container">
      <div class="row">
        <div class="col s12 m10 offset-m1 center">
          <h5>Welcome To WeDev, Your Tech Leader</h5>
          <h1>Build For The Future</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit fugit deserunt quos provident aliquam inventore.</p>
          <br>
          <br>
          <a href="login.php" class="btn btn-large white purple-text">Login</a>
          <a href="registr.php" class="btn btn-large purple white-text">Sign Up</a>
        </div>
      </div>
    </div>
  </header>

  <!-- *********************************** -->
    <!-- Section: Icon Boxes -->
    <section class="section section-icons center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="fa fa-user fa-3x deep-purple-text text-darken-2"></i>
            <h5 class="grey-text text-darken-4">SEO</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, suscipit!</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="fa fa-database fa-3x deep-purple-text text-darken-2"></i>
            <h5 class="grey-text text-darken-4">Databases</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, suscipit!</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="fa fa-bolt fa-3x deep-purple-text text-darken-2"></i>
            <h5 class="grey-text text-darken-4">Marketing</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, suscipit!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: About -->
  <section class="section section-about grey lighten-4">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <h3>
            <span class="deep-purple-text text-darken-1">About</span> Us</h3>
          <p class="flow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid odio eum magnam aut at voluptates omnis sint reiciendis
            dolorem recusandae.</p>
        </div>
        <div class="col s12 m6">
          <img src="images/tech.jpg" alt="" class="circle responsive-img">
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Developers -->
  <section class="section section-developers white-text">
    <div class="primary-overlay valign-wrapper">
      <div class="container">
        <div class="row">
          <div class="col s12 center">
            <h3>For Developers, By Developers</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Languages -->
  <section class="section section-language grey lighten-4">
    <div class="container">
      <div class="row">
        <h4 class="center">Work With
          <span class="deep-purple-text text-darken-1"> Any Language</span>
        </h4>
        <br>
        <br>
        <div class="row">
          <div class="col s2">
            <img src="images/python-logo.png" class="responsive-img" alt="">
          </div>
          <div class="col s2">
            <img src="images/ruby-logo.png" class="responsive-img" alt="">
          </div>
          <div class="col s2">
            <img src="images/php-logo.png" class="responsive-img" alt="">
          </div>
          <div class="col s2">
            <img src="images/node-logo.png" class="responsive-img" alt="">
          </div>
          <div class="col s2">
            <img src="images/c-sharp-logo.png" class="responsive-img" alt="">
          </div>
          <div class="col s2">
            <img src="images/java-logo.png" class="responsive-img" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Include Footer section -->
  <?php
  include ("footer.php");
  ?>


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.carousel.carousel-slider').carousel({ fullWidth: true });
      $('.button-collapse').sideNav();
      $('.modal').modal();
    });
  </script>
    
</body>
</html>