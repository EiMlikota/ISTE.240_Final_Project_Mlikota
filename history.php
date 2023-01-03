
<!doctype html>
<html lang="en">

<head>
 
  <title>History</title>
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
      <h1>History of Stuttgart</h1>
      <strong>#stuttgart22</strong>

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
      <strong>History</strong>
      <!--history text-->
      <p>Stuttgart gets its name from the term "Stutengarten," which refers to a riding stud in the 10th century.
        The land around today's capital of Baden-Württemberg, however, was inhabited considerably earlier, according to
        numerous findings and excavations.
        This is mostly due to the strategically advantageous location; after all, multiple traffic routes converged here
        early on. The previously mentioned Altenburg in today's Bad Cannstatt was also strategically highly
        advantageous,
        therefore it was formerly the most significant location in the Stuttgart metropolitan region.<br> The stud farm,
        from which Stuttgart gets its name, was finally founded in the 10th century.
        The location for this stud was not picked at random:
        Stuttgart is located in a basin that is cut off on three sides, making it ideal for horse breeding because the
        animals could be kept in a closely restricted area without the need for complex fencing measures.
        The region was also easy to monitor due to the surrounding hills, making it impossible for thieves to take the
        expensive horses.<br>The town was finally founded in the beginning of the 13th century.
        The village around the stud farm eventually fell into the hands of the Margrave of Baden, who upgraded it to
        town status in 1219.
        A moated fortress was built a few years later as an outward statement of the newly acquired status.<br>Stuttgart
        was conquered by various conquerors several times throughout the following centuries.
        The neighbouring imperial city of Esslingen, for example, was frequently at war with the new upstart.
        During this time, the city received several reinforcements and fortifications in order to better defend itself
        in the case of an attack.<br>Stuttgart became the capital of the Kingdom of Württemberg in the early nineteenth
        century, resulting in a massive economic, political, and religious boom.
        This was also the start of industry, which resulted in a massive increase in the population of Stuttgart.
        Between 1834 and 1871, for example, the population more than doubled.<br>During World War II, Stuttgart
        witnessed a historical disaster.
        The Americans flew countless air raids against the city near the end of the war, dropping about 180,000 bombs in
        the process.
        Thousands of Stuttgart residents perished during the bombing nights, and the majority of the city's homes and
        public buildings were utterly destroyed.
        Finally, on April 22, 1945, the city was invaded and conquered by American and French soldiers.<br>But Stuttgart
        recovered. In the 1950s, tens of thousands of newly displaced people arrived in Stuttgart,
        causing the city's population to explode. By way of reference, Stuttgart had a population
        of around 500,000 people when the war began, but only roughly half of that remained once the war ended. However,
        by 1962, the population had risen to 640,000, the largest it had ever been. As a result of the economic miracle
        and the ensuing labor need, a growing number of guest workers arrived in Baden-capital.<br>
        Now days Stuttgart is the second-largest city in southern Germany, with a population of roughly 600,000 people.
        In a national comparison, it comes in sixth place. It is one of Germany's most prosperous economic regions, as
        well as a leader in culture, education, and research.

    </div>


  </section>
  <!--hpopular-places-end-->
  <!--Footer-->
  <footer>
  <?php include('includes/footer.php'); ?>
  </footer>
</body>

</html>