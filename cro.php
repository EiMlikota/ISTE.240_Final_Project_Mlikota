
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>Croats</title>
    <?php include('includes/header.php'); ?>

  </head>

  <body>
    <!--Navigation-->
    <nav class="navigation">
      <!--logo-->
      <img src="images/stuttgart2.png" class="logo" alt="stu" />

      <!--menu-btn-->
      <input type="checkbox" class="menu-btn" id="menu-btn" />
      <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
      </label>

      <!--menu-->
      <!--menu-->
      <ul class="menu">
        <li><a href="main.php">Home</a></li>
        |
        <li><a href="history.php">History</a></li>
        |
        <li><a href="museum.php">Museums</a></li>
        |
        <li><a href="castles.php">Castles</a></li>
        |
        <li><a href="park.php">Parks</a></li>
        |
        <li><a href="gastro.php">Gastro</a></li>
        |
        <li><a href="ind.php">Industry</a></li>
        |
        <li><a href="sport.php">Sport</a></li>
        |
        <li><a href="cro.php" class="active">Croats</a></li>
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
    <section id="crowelcome">
      <!--welcome pic -->
      <img src="images/stuttgart.png" class="city" alt="bg" />

      <!--welcome text-->
      <div class="welcome-text">
        <h1>Croats in Stuttgart</h1>
        <strong>#stuttgart22</strong>
      </div>
    </section>
    <!--welcome-end-->

    <!--category-->
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
      <!--category-end-->
      <!--castlepopular-->
      <section id="castlepopular-places">
        <h1>CROATIAN COMMUNITY</h1>
        <!--box-->
        <div class="castlepopular-box">
          <img src="images/hkz.jpg" alt="CannstatterWasen" />
          <p id="citeR"><cite>HKZ logo/ </cite> hkz-stuttgart.de</p>

          <p>
            Stuttgart has one of the largest Croatian communities in Germany.
            There are currently 122,835 Croats living in Baden-Württemberg,of
            which 15,000 live in Stuttgart. The two largest migrations of Croats
            to Germany took place after the Second World War and now again in
            the last 10 to 15 years. The Croatian community is very connected
            with the Croatian Catholic Mission in Germany. The Croatian
            community organizes regular meetings and events which are regularly
            very visited. I myself am a Croatian who was born in Stuttgart and
            therefore I see Germany as my second home.
          </p>
          <!--castlepopular-btn-->
          <a href="https://www.hkz-stuttgart.de" class="castlepopular-btn">
            <i class="fas fa-shopping-bag"></i> More
          </a>
        </div>
      </section>
      <!--castlepopular-places-end-->
    </section>
    <!--castlepopular-places-end-->
    <!--Footer-->
    <footer>
      <div class="footer-container">
      <?php include('includes/footer.php'); ?>
    </footer>
  </body>
</html>
