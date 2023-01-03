
<!doctype html>
<html lang="en">

<head>

    <title>Sport</title>
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
            <li><a href="main.">Home </a></li> |
            <li><a href="history.php">History</a></li>|
            <li><a href="museum.php">Museums</a></li>|
            <li><a href="castles.php">Castles</a></li>|
            <li><a href="park.php">Parks</a></li>|
            <li><a href="gastro.php">Gastro</a></li>|
            <li><a href="ind.php">Industry</a></li>|
            <li><a href="sport.php" class="active">Sport</a></li>|
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
    <section id="sportwelcome">
        <!--welcome pic-->
        <img src="images/stuttgart.png" class="city" alt="bg">

        <!--welcome text-->
        <div class="welcome-text">
            <h1>Sport in Stuttgart</h1>
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
            <h3>TOP Teams in Stuttgart</h3>
        </div>

        <!--box-container------>
        <div class="castlepopular-container">

            <!--box---------->
            <div class="castlepopular-box">
                <img src="images/vfb.png" alt="museum">
                <p id="citeR"><cite>VFB Stuttgart logo/ </cite> Canva.com</p>
                <strong>VFB Stuttgart</strong>
                <p>VfB Stuttgart is a sports club with numerous teams, and it is Germany's sixth largest sports club.
                    The name, on the other hand, is associated with a football (soccer) team. It's easy to see why: they
                    play in the Bundesliga and have won the national championship five times (the most recent in 2007)
                    as well as the DFB-Pokal three times.
                    The Mercedes-Benz Arena is where the team plays its home games. From the end of August until the end
                    of May, the seasons are in effect.</p>
                <!--castlepopular-btn------->
                <a href="https://www.vfb.de/en/" class="castlepopular-btn">
                    <i class="button"></i> More
                </a>

            </div>

            <!--box---------->
            <div class="castlepopular-box">
                <img src="images/MHP-Riesen.jpg" alt="tv tower">
                <p id="citeR"><cite>MHP-Riesen logo/</cite> MHP-Riesen.de</p>
                <strong>MHP Riesen</strong>
                <p>MHP Riesen Ludwigsburg compete in the Basketball Bundesliga (BBL), Germany's top basketball league.
                    DJK Ludwigsburg was created in 1960 and played in the second level before being promoted to the
                    first division in 1986. <BR>They obtained their current name in 2012 as a result of sponsorship.
                    The MHP Arena in Ludgwigsburg, roughly 14 kilometers north of Stuttgart, hosts the team.<BR>
                    From September through April, the season is open to the public.</p>

                <!--castlepopular-btn------->
                <a href="https://mhp-riesen-ludwigsburg.de/top-menu/english/" class="castlepopular-btn">
                    <i class="button"></i> More
                </a>
            </div>

            <!--box---------->
            <div class="castlepopular-box">
                <img src="images/TVB1898.jpg" alt="Cannstatter Wasen">
                <p id="citeR"><cite>TVB1898 logo/ </cite> TVB1898.de</p>
                <strong>TVB 1898</strong>
                <p>TVB 1898 Stuttgart has been a member of the Handball-Bundesliga (German Handball Leaguefirst )'s
                    division since 2014, after finishing third in the overall standings.
                    The team was founded in 2006 as Turnverein Bittenfeld 1898 e. V. or TV Bittenfeld, because they are
                    from Waiblingen, a town 14 kilometers (8.5 miles) northeast of Stuttgart in Bittenfeld.
                    The Scharrena in Bad Canstatt, located across the Neckar River from Stuttgart, is the team's home
                    venue. </p>
                <!--castlepopular-btn------->
                <a href="https://www.tvbstuttgart.de" class="castlepopular-btn">
                    <i class="button"></i> More
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