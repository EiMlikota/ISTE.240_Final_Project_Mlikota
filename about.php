
<!doctype html>
<html lang="en">

<head>
 
  <title>About</title>
  <?php include('includes/header.php'); ?>


</head>

<body>

  <!--Navigation-->
  <nav class="navigation">

    <!--logo-->
    <!-- <a href="main.php" -->
    <img src="images/stuttgart2.png" class="logo" alt="stu">

    <!--menu-btn-->
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon">
      <span class="nav-icon"></span>
    </label>


    <!--menu-->

    <ul class="menu">
      <li><a href="main.php">Home </a></li> |
      <li><a href="history.php" class="active">History</a></li>|
      <li><a href="museum.php">Museums</a></li>|
      <li><a href="castles.php">Castles</a></li>|
      <li><a href="park.php">Parks</a></li>|
      <li><a href="gastro.php">Gastro</a></li>|
      <li><a href="ind.php">Industry</a></li>|
      <li><a href="sport.php">Sport</a></li>|
      <li><a href="cro.php">Croats</a></li>|
      <li><a href="refrences.php">References</a></li>
      <label class="switch" for="checkbox">
        <input onclick="darkmode()" type="checkbox" id="checkbox" />
        <div class="slider round"></div>
        </label>
    </ul>
  </nav>
  <!--nav-end-->

  <!--welcome-->
  <section id="hwelcome">
    <!--welcome pic-->
    <img src="images/stuttgart.png" class="city" alt="bg">

    <!--welcome text-->
    <div class="welcome-text">
      <h1>About section</h1>
      <strong>html, php, css, js...</strong>

    </div>

  </section>
  <!--welcome-end-->
  <!--=ategory-->
  <section id="hcategory">
    <!--box-container-->
    <div class="hcategory-container">

      <!--box-->
      <a href="history.php" class="hcategory-box">
        <img src="images/history.png" alt="pic">
        <span>History</span>
      </a>

      <!--box-->
      <a href="museum.php" class="hcategory-box">
        <img src="images/museum.png" alt="pic">
        <span>Museums</span>
      </a>

      <!--box-->
      <a href="castles.php" class="hcategory-box">
        <img src="images/castle.png" alt="pic">
        <span>Castles</span>
      </a>

      <!--box-->
      <a href="park.php" class="hcategory-box">
        <img src="images/nature.png" alt="pic">
        <span>Parks</span>
      </a>

      <!--box-->
      <a href="gastro.php" class="hcategory-box">
        <img src="images/resto.png" alt="pic">
        <span>Gastro</span>
      </a>
      <!--box-->
      <a href="ind.php" class="hcategory-box">
        <img src="images/industry.png" alt="pic">
        <span>Industry</span>
      </a>

      <!--box-->
      <a href="sport.php" class="hcategory-box">
        <img src="images/sport.png" alt="pic">
        <span>Sport</span>
      </a>

      <!--box-->
      <a href="cro.php" class="hcategory-box">
        <img src="images/cro.svg.png" alt="pic">
        <span>Croats</span>
      </a>

    </div>
  </section>
  <!--hcategory-en-->
  <!--Resto-->
  <section id="hpopular-places">
    <!--box-->
    <div class="hpopular-box">
      <strong>Dark mode </strong>
      i added a dark mode switch on the page 
      <!--history text-->
      <p>

    </div>
    <div class="hpopular-box">
      <strong>hover over  </strong>
      added hover over effects on buttons
      <!--history text-->
      <p>

    </div>
    <div class="hpopular-box">
      <strong>Map  </strong>
      Added a google Maps with personalized selection of places
      <!--history text-->
      <p>

    </div>
    <div class="hpopular-box">
      <strong> Comment section  </strong>
      I have added a common section in the shape of a phone. The comments are connected to the database.
      <!--history text-->
      <p>

    </div>
    <div class="hpopular-box">
      <strong>Map  </strong>
      Added a google Maps with personalized selection of places
      <!--history text-->
      <p>
      <div class="hpopular-box">
      <strong>password protection   </strong>
      I added password protection for the website but I consistently got an error for a line of codes which made everything look bad when opened.
      <!--history text-->
      <p>
      </div>
      <div class="hpopular-box">
      <strong>php   </strong>
Both header and footer are in PHP      <!--history text-->
      <p>
        
    </div>



  </section>
  <!--hpopular-places-end-->
  <!--Footer-->
  <footer>
  <?php include('includes/footer.php'); ?>
  </footer>
</body>

</html>