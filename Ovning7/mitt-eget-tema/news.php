<?php
include('functions.php'); // Inkludera functions.php
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo getPageTitle(); ?></title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header class="hero" style="background-image: url('<?php echo getBackgroundImage(); ?>');">
    <div class="overlay">
      <div class="container">
        <div class="hero-content">
          <p class="slogan"><?php echo getPageSlogan(); ?></p>
          <h1><?php echo getPageTitle(); ?></h1>
        </div>
        <?php include 'includes/menu.php'; ?>
      </div>
    </div>
  </header>

  <main>
    <h2>Rese- och Kulturnyheter</h2>
    <p>Få de senaste uppdateringarna om resor, kultur, mat och tips för resenärer!</p>

    <div class="news-list">
      <!-- Exempel på nyheter -->
      <div class="container">
        <section>
          <h3>Semestrar & Resor</h3>
          <article>
            <img src="images/travel1.jpg" alt="Bild på semesterort" class="news-thumbnail">
            <h4>10 fantastiska destinationer för 2024</h4>
            <p>Upptäck årets mest populära resmål för semestern...</p>
            <a href="single-news.php">Läs mer</a>
          </article>
          <article>
            <img src="images/travel2.jpg" alt="Vacker strand" class="news-thumbnail">
            <h4>Reseguide: Asiens bästa stränder</h4>
            <p>Vill du fly vardagen? Här är några av Asiens bästa stränder...</p>
            <a href="single-news.php">Läs mer</a>
          </article>
        </section>

        <section>
          <h3>Kultur & Mat</h3>
          <article>
            <img src="images/food1.jpg" alt="Traditionell maträtt" class="news-thumbnail">
            <h4>5 rätter du måste prova i Italien</h4>
            <p>Italien är känt för sin mat. Här är några rätter du inte får missa...</p>
            <a href="single-news.php">Läs mer</a>
          </article>
        </section>

        <section>
          <h3>Utrikesnyheter</h3>
          <article>
            <img src="images/news3.jpg" alt="Politisk demonstration" class="news-thumbnail">
            <h4>Hur politiska förändringar påverkar resenärer</h4>
            <p>Lär dig mer om hur nya regler och lagar kan påverka dina resor...</p>
            <a href="single-news.php">Läs mer</a>
          </article>
        </section>
      </div>
    </div>
  </main>

  <?php include 'includes/footer.php'; ?>
