
<!doctype html>
<html lang="en">
<head>
   
    <title>Gastro</title>
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
            <li><a href="history.php">History</a></li>|
            <li><a href="museum.php">Museums</a></li>|
            <li><a href="castles.php" >Castles</a></li>|
            <li><a href="park.php">Parks</a></li>|
            <li><a href="gastro.php" class="active">Gastro</a></li>|
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
    <section id="gastrowelcome">
        <!--welcome pic-->
        <img src="images/stuttgart.png" class="city" alt="bg">

        <!--welcome text-->
        <div class="welcome-text">
            <h1>Gastronomy</h1>
            <strong>#stuttgart22</strong>

        </div>

    </section>
    <!--welcome-end-->
    <!--=ategory-->
    <section id="category">
        <!--box-container-->
        <div class="category-container">

            <!--box-->
            <a href="history.php" class="category-box">
                <img src="images/history.png" alt="pic">
                <span>History</span>
            </a>

            <!--box-->
            <a href="museum.php" class="category-box">
                <img src="images/museum.png" alt="pic">
                <span>Museums</span>
            </a>

            <!--box-->
            <a href="castles.php" class="category-box">
                <img src="images/castle.png" alt="pic">
                <span>Castles</span>
            </a>

            <!--box-->
            <a href="park.php" class="category-box">
                <img src="images/nature.png" alt="pic">
                <span>Parks</span>
            </a>

            <!--box-->
            <a href="gastro.php" class="category-box">
                <img src="images/resto.png" alt="pic">
                <span>Gastro</span>
            </a>
            <!--box-->
            <a href="ind.php" class="category-box">
                <img src="images/industry.png" alt="pic">
                <span>Industry</span>
            </a>

            <!--box-->
            <a href="sport.php" class="category-box">
                <img src="images/sport.png" alt="pic">
                <span>Sport</span>
            </a>

            <!--box-->
            <a href="cro.php" class="category-box">
                <img src="images/cro.svg.png" alt="pic">
                <span>Croats</span>
            </a>

        </div>
    </section>
<!--category-en-->
    <!--Resto-->
    <section id="castlepopular-places">

        <!--heading-->
        <div class="castlepopular-heading">
            <h3>Top Restaurants</h3>
        </div>

        <!--box-container-->
        <div class="castlepopular-container">

            <!--box-->
            <div class="castlepopular-box">
                <img src="images/nannina.webp" alt="museum">
                <strong>Nannina</strong>
                <!--castlepopular-btn------->
                <a href="https://guide.michelin.com/hr/en/baden-wurttemberg/stuttgart/restaurant/nannina" class="castlepopular-btn">
                    <i class="fas fa-shopping-bag"></i> More
                </a>

            </div>

            <!--box-->
            <div class="castlepopular-box">
                <img src="images/restaurant-faessle.jpg" alt="tv tower">
                <strong>Fässle le Restaurant</strong>

                <!--castlepopular-btn-->
                <a href="https://guide.michelin.com/hr/en/baden-wurttemberg/stuttgart/restaurant/fassle-le-restaurant" class="castlepopular-btn">
                    <i class="fas fa-shopping-bag"></i> More
                </a>
            </div>

          <!--box-->
            <div class="castlepopular-box">
                <img src="images/zur.jpg" alt="Cannstatter Wasen">
                <strong>Zur Linde</strong>
                <!--castlepopular-bt-->
                <a href="https://guide.michelin.com/hr/en/baden-wurttemberg/stuttgart/restaurant/zur-linde" class="castlepopular-btn">
                    <i class="fas fa-shopping-bag"></i> More
                </a>
            </div>
    </section>
    <!--castlepopular-places-end-->
    <!--bar-->
    <section id="castlepopular-places">

        <!--heading-->
        <div class="castlepopular-heading">
            <h3>Top Bar's</h3>
        </div>

        <!--box-container------>
        <div class="castlepopular-container">

          <!--box-->
            <div class="castlepopular-box">
                <img src="images/spielsaal-2.jpg" alt="museum">
                <strong>Spielbank</strong>
                <!--castlepopular-btn------->
                <a href="https://www.spielbank-stuttgart.de" class="castlepopular-btn">
                    <i class="fas fa-shopping-bag"></i> More
                </a>

            </div>

          <!--box-->
            <div class="castlepopular-box">
                <img src="images/lounge.jpg" alt="tv tower">
                <strong>Jigger & Spoon</strong>

                <!--castlepopular-btn------->
                <a href="https://jiggerandspoon.de" class="castlepopular-btn">
                    <i class="fas fa-shopping-bag"></i> More
                </a>
            </div>

          <!--box-->
            <div class="castlepopular-box">
                <img src="images/john-cranko-lounge.jpg" alt="Cannstatter Wasen">
                <strong>John-Cranko-Lounge</strong>
                <!--castlepopular-btn------->
                <a href="https://jiggerandspoon.de" class="castlepopular-btn">
                    <i class="fas fa-shopping-bag"></i> More
                </a>
            </div>
    </section>
     <!--castlepopular-places-end-->
   <!--Footer-->
  <footer>
  <?php include('includes/footer.php'); ?>
  </footer>
</body>
</html>



