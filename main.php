<?php
 require_once('../../dbConn.php');

if($mysqli){
	if(!empty($_POST['name']) && !empty($_POST['content'])){
		$prepSql = 'INSERT into comment  (comment_author, comment_content, comment_date) values (?,?,now())';
		$stmt = $mysqli->prepare($prepSql);
		$stmt->bind_param('ss', $_POST['name'], $_POST['content']);
		$stmt->execute();
		$stmt->close();
        // echo "Comment added!";
	
        if ($_POST) {
            header("Location:" . $_SERVER['REQUEST_URI']);
            exit;
        }

	}
	$sql = "SELECT comment_author, comment_content, comment_date FROM comment ";
	$res=$mysqli->query($sql);
	if($res){
		while($rowHolder = $res -> fetch_assoc()){
			//populate array (array of arrays)
			$records[] = $rowHolder;
		}

	}
}

 ?>
<!doctype html>
<html>

<head>
  
    <title>Stuttgart</title>
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
          
            <li><a href="main.php" class="active">Home </a></li> |
            <li><a href="history.php">History</a></li>|
            <li><a href="museum.php">Museums</a></li>|
            <li><a href="castles.php">Castles</a></li>|
            <li><a href="park.php">Parks</a></li>|
            <li><a href="gastro.php">Gastro</a></li>|
            <li><a href="ind.php">Industry</a></li>|
            <li><a href="sport.php">Sport</a></li>|
            <li><a href="cro.php">Croats</a></li>|
            <li><a href="refrences.php">References</a></li>
            <li><a href="about.php">About</a></li>|

            <label class="switch" for="checkbox">
            <input onclick="darkmode()" type="checkbox" id="checkbox" />
            <div class="slider round"></div>
            </label>
          
        </ul>
    </nav>

    <!--nav-end-->
    <!--welcome-->
    <section id="welcome">
        <!--welcome pic-->
        <img src="images/stuttgart.png" class="city" alt="bg">
        <!--welcome text-->
        <div class="welcome-text">
            <h1>Welcome to Stuttgart</h1>
            <strong>#stuttgart22</strong>
        </div>
    </section>
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
    <section id="map">

<!--img-->
<div class="mapPhone">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26565.284417743605!2d9.159704329885473!3d48.77918783170282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4799db34c1ad8fd3%3A0x79d5c11c7791cfe4!2sStuttgart%2C%20Germany!5e1!3m2!1sen!2shr!4v1646492796972!5m2!1sen!2shr"
        width="280" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<!--text-->
<div class="map-text">
    <strong>Don't get lost in Stuttgart</strong>
    <p>Click bellow to find <span id="googlered">TOP PLACES</span> on
        <span id="googleblue">G</span><span id="googlered">o</span><span id="googlegold">o</span><span
            id="googleblue">g</span><span id="googlegreen">l</span><span id="googlered">e</span> Maps
    </p>
    <!--btns-->
    <div class="map-btns">
        <a href="https://goo.gl/maps/gxVL5BMSM7FRWQKZ9"><img
                src="https://download.logo.wine/logo/Google_Maps/Google_Maps-Logo.wine.png"
                alt="maps project1"></a>
    </div>
</div>

</section>
    <!--POPUILAR-->
    <section id="popular-places">

        <!--heading-->
        <div class="popular-heading">
            <h3>Popular</h3>
        </div>

        <!--box-container-->
        <div class="popular-container">

            <!--box-->
            <div class="popular-box">
                <img src="images/museM.png" alt="museum">
                <p id="citeR"><cite>Mercedes-Benz-Museum/ </cite> Canva.com</p>
                <strong>Mercedes-Benz-Museum</strong>
                <!--popular-btn-->
                <a href="https://www.mercedes-benz.com/en/classic/museum/" class="popular-btn">
                    <i class="fas fa-shopping-bag"></i> More
                </a>

            </div>

            <!--box-->
            <div class="popular-box">
                <img src="images/tv.png" alt="tv tower">
                <p id="citeR"><cite>TV Tower/ </cite> Canva.com</p>
                <strong>TV Tower</strong>

                <!--popular-btn-->
                <a href="https://www.fernsehturm-stuttgart.de/en/" class="popular-btn">
                    <i class="fas fa-shopping-bag"></i> More
                </a>
            </div>

            <!--box-->
            <div class="popular-box">
                <img src="images/park.png" alt="Cannstatter Wasen">
                <p id="citeR"><cite>Cannstatter Wasen/ </cite> Canva.com</p>
                <strong>Cannstatter Wasen</strong>
                <!--popular-btn------->
                <a href="https://www.cannstatter-volksfest.de/en/landing-page/" class="popular-btn">
                    <i class="fas fa-shopping-bag"></i> More
                </a>
            </div>
    </section>
    <!--popular-places-end-->

    <!--==BIGIII-logo-->
    <section id="stIndustry">

        <!--heading------------>
        <div class="bigIII-heading">
            <h3>Stuttgart's BIG III</h3>
        </div>


        <!--logo-container-->
        <div class="bigIII">
            <a href="ind.php">
                <img src="images/mercedes.png" alt="logo"></a>
            <a href="ind.php">
                <img src="images/bosch.png" alt="logo"></a>
            <a href="ind.php">
                <img src="images/porsche.png" alt="logo"></a>
        </div>

    </section>
    <!--logo-section-end-->

    <!--map-->
  
    <section id="map">

        <!--img-->
        <div class="mapPhone">
        <div id="cSection">
			<ul>
			<?php
				//will use for output
				foreach($records as $thisRow){
					echo '<li><span class="name">' .  $thisRow['comment_author'] . ':</span> ' . $thisRow['comment_content'] . ' @ ' . $thisRow['comment_date'] . '</li>';
				}
			?>
			</ul>
		</div>
        </div>

        <!--text-->
        <div class="map-text">
            <strong>Please comment</strong>
            <form class= "comment" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >		
			Name: <input type="text" id="sender" name="name" />
            </br>
            <textarea id="message" name="content" rows="4" cols="30" placeholder="Tell us...."></textarea>
			<input type="submit" value="Add comment"/>
		</form>
           
            <!--btns-->
            <!-- <div class="map-btns">
                <a href="https://goo.gl/maps/gxVL5BMSM7FRWQKZ9"><img
                        src="https://download.logo.wine/logo/Google_Maps/Google_Maps-Logo.wine.png"
                        alt="maps project1"></a>
            </div> -->
        </div>

    </section>
    <!--MAP END-->
    
    <footer>
    <?php include('includes/footer.php'); ?>

    </footer>
</body>


</html>