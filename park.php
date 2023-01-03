
<!doctype html>
<html lang="en">

<head>
  
   <title>Parks</title>
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
            <li><a href="park.php" class="active">Parks</a></li>|
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
    <section id="pwelcome">
        <!--welcome pic-->
        <img src="images/stuttgart.png" class="city" alt="bg">

        <!--welcome text-->
        <div class="welcome-text">
            <h1>Parks in Stuttgart</h1>
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


        <!--box-->
        <div class="castlepopular-box">
            <img src="images/park1.jpg" alt="museum">
            <p id="citeR"><cite>HÖHENPARK/ </cite> Canva.com</p>
            <strong>HÖHENPARK</strong>
            <p>On the Killesberg, you'll find Stuttgart's largest and most diverse inner-city park. For Stuttgart
                locals, it is one of the most castlepopular recreational sites. The Höhenpark Killesberg Stuttgart is a
                delightful location for the whole family, with pure action and relaxation, a sea of flowers and water
                features, an observation tower, and a milk bar.</p>

        </div>

        <!--box-->
        <div class="castlepopular-box">
            <img src="images/park2.jpeg" alt="tv tower">
            <p id="citeR"><cite>WILHELMA/ </cite> Canva.com</p>
            <strong>WILHELMA</strong>
            <p>Wilhelma Stuttgart, Germany's first zoological-botanical garden, offers a unique combination of zoo and
                botany.
                Around 11,000 animals representing 1,200 species can be seen here. This makes Wilhelma Zoo one of the
                most diverse zoos in the world, not just in Germany. Wilhelma is remarkable not only because of the
                various animals, but also because of the vegetation. Approximately 8,500 plant types and variants
                represent the whole range of nature's luxuriant diversity.
                Everything is framed by the historical park, which, with its Moorish-style buildings, invites you to
                fantasize.</p>
        </div>

        <!--box-->
        <div class="castlepopular-box">
            <img src="images/park3.jpg" alt="Cannstatter Wasen">
            <p id="citeR"><cite>BLÜHENDES BAROCK/ </cite> Canva.com</p>
            <strong>BLÜHENDES BAROCK</strong>
            <p>The aroma of blossoms and the romance of fairy tales can be found in the large gardens of Ludwigsburg's
                Blühende Barock. In Germany's oldest and most beautiful garden exhibition, you'll find a wide range of
                sensory experiences in a unique setting - meticulously staged by hardworking garden artists. Stroll
                through twisting gardens and seemingly uncontrolled love of nature in a time-forgotten romance. </p>

        </div>
    </section>
    <!--castlepopular-places-end-->
    <!--Footer-->
    <footer>
    <?php include('includes/footer.php'); ?>
    </footer>
</body>

</html>