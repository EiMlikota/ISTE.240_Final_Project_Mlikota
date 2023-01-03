
<!doctype html>
<html lang="en">

<head>
   
    <title>Industry</title>
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
            <li><a href="castles.php">Castles</a></li>|
            <li><a href="park.php">Parks</a></li>|
            <li><a href="gastro.php">Gastro</a></li>|
            <li><a href="ind.php" class="active">Industry</a></li>|
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
    <section id="iwelcome">
        <!--welcome pic-->
        <img src="images/stuttgart.png" class="city" alt="bg">

        <!--welcome text-->
        <div class="welcome-text">
            <h1> Industry in Stuttgart</h1>
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

        <!--heading----------->
        <div class="castlepopular-heading">
            <h3>The BIG III</h3>
        </div>

        <!--box-container------>
        <!-- <div class="castlepopular-container"> -->

        <!--box-->
        <div class="castlepopular-box">
            <img src="images/mercedes.png" alt="museum">
            <p id="citeR"><cite>Mercedes/ </cite> Canva.com</p>
            <strong>Mercedes</strong>
            <p>Mercedes-Benz was founded and is still based in Stuttgart, Germany. This plant, which opened in 1904,
                currently employs over 19,000 people. Stuttgart's factory produces Mercedes-Benz parts and conducts
                research and development.</p>
            <!--castlepopular-btn------->
            <a href="https://www.mercedes-benz.com/en/" class="castlepopular-btn">
                <i class="fas fa-shopping-bag"></i> More
            </a>

        </div>

        <!--box-->
        <div class="castlepopular-box">
            <img src="images/bosch.png" alt="tv tower">
            <p id="citeR"><cite>Bosch</cite> Canva.com</p>
            <strong>Bosch</strong>
            <p>Since 1909, the tradition-rich location in Stuttgart has glanced on more than a century of history.
                Today, this site houses a vast number of technical and commercial functional areas, product and business
                units, production, training and further education facilities, and central departments.</p>
            <!--castlepopular-btn------->
            <a href="https://www.bosch.com" class="castlepopular-btn">
                <i class="fas fa-shopping-bag"></i> More
            </a>
        </div>

        <!--box-->
        <div class="castlepopular-box">
            <img src="images/porsche.png" alt="Cannstatter Wasen">
            <p id="citeR"><cite>Porsche</cite> Canva.com</p>
            <strong>Porsche</strong>
            <p>In Stuttgart, Ferdinand Porsche started the sports car business in 1931, creating a chapter in German
                automotive history.
                There has been a strong relationship between Porsche and Volkswagen since the first vehicle, the 356
                Roadster, rolled off the assembly line in 1948.
                Porsche's core business is sports cars, but the Stuttgart-based manufacturer has expanded to include
                sedans and SUVs.</p>
            <!--castlepopular-btn------->
            <a href="https://www.porsche.com/central-eastern-europe/en/_croatia_/" class="castlepopular-btn">
                <i class="fas fa-shopping-bag"></i> More
            </a>
        </div>
    </section>
    <!--castlepopular-places-end--------------------->

    <!--castlepopular-places-end-->
    <!--Footer-->
    <footer>
    <?php include('includes/footer.php'); ?>
    </footer>
</body>

</html>