
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Castles</title>
    <?php include('includes/header.php'); ?>
  </head>

  <body>
    <!--Navigation-->
    <nav class="navigation">
      <!--logo-->
      <!-- <a href="main.html" -->
      <img src="images/stuttgart2.png" class="logo" alt="stu" />

      <!--menu-btn-->
      <input type="checkbox" class="menu-btn" id="menu-btn" />
      <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
      </label>

      <!--menu-->

      <ul class="menu">
        <li><a href="main.php">Home </a></li>
        |
        <li><a href="history.php">History</a></li>
        |
        <li><a href="museum.php">Museums</a></li>
        |
        <li><a href="castles.php" class="active">Castles</a></li>
        |
        <li><a href="park.php">Parks</a></li>
        |
        <li><a href="gastro.php">Gastro</a></li>
        |
        <li><a href="ind.php">Industry</a></li>
        |
        <li><a href="sport.php">Sport</a></li>
        |
        <li><a href="cro.php">Croats</a></li>
        |
        <li><a href="refrences.php">References</a></li>
        <label class="switch" for="checkbox">
          <input onclick="darkmode()" type="checkbox" id="checkbox" />
          <div class="slider round"></div>
          </label>
      </ul>
    </nav>
    <!--nav-end-->

    <!--welcome-->
    <section id="castlewelcome">
      <!--welcome pic-->
      <img src="images/stuttgart.png" class="city" alt="bg" />

      <!--welcome text-->
      <div class="welcome-text">
        <h1>Castles of Stuttgart</h1>
        <strong>#stuttgart22</strong>
      </div>
    </section>
    <!--welcome-end-->
    <!--==category-->
    <section id="category">
      <!--box-container-->
      <div class="category-container">
        <!--box-->
        <a href="history.php" class="category-box">
          <img src="images/history.png" alt="pic" />
          <span>History</span>
        </a>

        <!--box-->
        <a href="museum.php" class="category-box">
          <img src="images/museum.png" alt="pic" />
          <span>Museums</span>
        </a>

        <!--box-->
        <a href="castles.php" class="category-box">
          <img src="images/castle.png" alt="pic" />
          <span>Castles</span>
        </a>

        <!--box-->
        <a href="park.php" class="category-box">
          <img src="images/nature.png" alt="pic" />
          <span>Parks</span>
        </a>

        <!--box-->
        <a href="gastro.php" class="category-box">
          <img src="images/resto.png" alt="pic" />
          <span>Gastro</span>
        </a>
        <!--box-->
        <a href="ind.php" class="category-box">
          <img src="images/industry.png" alt="pic" />
          <span>Industry</span>
        </a>

        <!--box-->
        <a href="sport.php" class="category-box">
          <img src="images/sport.png" alt="pic" />
          <span>Sport</span>
        </a>

        <!--box-->
        <a href="cro.php" class="category-box">
          <img src="images/cro.svg.png" alt="pic" />
          <span>Croats</span>
        </a>
      </div>
    </section>
    <!--category-end-->
    <!--castlepopular-->
    <section id="castlepopular-places">
      <!--box-->
      <div class="castlepopular-box">
        <img src="images/castle1.jpg" alt="museum" />
        <p id="citeR"><cite>HOHENNEUFFEN/ </cite> Canva.com</p>
        <strong>HOHENNEUFFEN</strong>
        <p>Hohenneuffen's 743-meter-high rock massif can be seen from miles away.
          The current ruins complex, the largest in the Swabian Alb, dates from
          the late Middle Ages. Its located on Hohenneuffen's a 743-meter-high
          rock massif can be seen from miles away.
        </p>
      </div>

      <!--box-->
      <div class="castlepopular-box">
        <img src="images/castle2.jpeg" alt="tv tower" />
        <p id="citeR"><cite>SCHLOSS LUDWIGSBURG/ </cite> Canva.com</p>
        <strong>SCHLOSS LUDWIGSBURG</strong>
        <p>
          Ludwigsburg Palace is one of Europe's largest remaining Baroque
          palaces. It is also one of the largest cultural centers, with three
          new museum: the Baroque Gallery, the Fashion Museum, and the Ceramics
          Museum.
        </p>
      </div>

      <!--box-->
      <div class="castlepopular-box">
        <img src="images/castle3.jpeg" alt="Cannstatter Wasen" />
        <p id="citeR"><cite>NEUES SCHLOSS/ </cite> Canva.com</p>
        <strong>NEUES SCHLOSS</strong>
        <p>
          TStuttgart, or more precisely the New Palace, is home to Germany's
          last big baroque residential palace complex. With the New Palace in
          the heart of Stuttgart, Duke Carl Eugen von Württemberg (1744-1793)
          hoped to transform the state capital into a second Versailles.
        </p>
      </div>
    </section>
    <!--castlepopular-places-end-->
    <!--Footer-->
    <footer>
    <?php include('includes/footer.php'); ?>
    </footer>
  </body>
</html>
