
<!doctype html>
<html lang="en">

<head>

    <title>Museum</title>
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
            <li><a href="museum.php" class="active">Museums</a></li>|
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
    <section id="muwelcome">
        <!--welcome pic-->
        <img src="images/stuttgart.png" class="city" alt="bg">

        <!--welcome text-->
        <div class="welcome-text">
            <h1>Museums in Stuttgart</h1>
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
    <section id="popular-places">


        <!--box---------->
        <div class="popular-box">
            <img src="images/museM.png" alt="museum">
            <p id="citeR"><cite>Mercedes-Benz-Museum/ </cite> Canva.com</p>
            <strong>Mercedes-Benz-Museum</strong>
            <p>This Stuttgart attraction showcases the company's 130-year history. The museum contains 160 vehicles and
                1,500 objects.
                On each level, the pathways cross, allowing you to switch between displays at any time.
                One segment is dedicated to vehicles that are representative of specific historical periods.
                On the other side of the path, you'll find displays from the company's whole history.harum quam, porro
                aliquid voluptates quasi exercitationem non in, eius nobis, culpa excepturi maxime a. Officiis!</p>
            <!--popular-btn------->
            <a href="https://www.mercedes-benz.com/en/classic/museum/" class="popular-btn">
                <i class="fas fa-shopping-bag"></i> More
            </a>

        </div>

        <!--box---------->
        <div class="popular-box">
            <img src="images/stGaleri.jpg.webp" alt="tv tower">
            <p id="citeR"><cite>Staatsgalerie/ </cite> Stuttgart.de</p>
            <strong>Staatsgalerie</strong>
            <p>Stuttgart's State Gallery is an art museum and a must-see attraction in the city.
                In 1843, the museum was established as a royal art collection. <br>
                Here are works of art dating from the 14th century to the present day.
                The extension from the 1980s is very stunning, both physically and aurally.
                The museum is already causing a stir from the outside, with its green walls and purple accents.<br>
                You'll find a large Oskar Schlemmer archive as well as one of Germany's most comprehensive collections
                of Pablo Picasso works.</p>

            <!--popular-btn------->
            <a href="https://www.porsche.com/international/aboutporsche/porschemuseum/" class="popular-btn">
                <i class="fas fa-shopping-bag"></i> More
            </a>
        </div>

        <!--box---------->
        <div class="popular-box">
            <img src="images/porM.jpg" alt="Cannstatter Wasen">
            <p id="citeR"><cite>Porsche-Museum/ </cite> Canva.com</p>
            <strong>Porsche-Museum</strong>
            <p>The Porsche Museum in Stuttgart, of course, is a must-see.
                The structure of the building itself is magnificent.
                If you want to see dream cars up close, such as the famous Porsche 911, this Stuttgart attraction is a
                must.
                There are more than 80 automobiles on display, as well as other minor exhibitions, detailing the history
                of the sports car maker.
                There are also temporary displays that deal with various aspects and vehicles in addition to the
                permanent show.</p>
            <!--popular-btn------->
            <a href="https://www.staatsgalerie.de/en.html" class="popular-btn">
                <i class="fas fa-shopping-bag"></i> More
            </a>
        </div>
    </section>
    <!--popular-places-end-->
    <!--Footer-->
    <footer>
    <?php include('includes/footer.php'); ?>
    </footer>
</body>

</html>