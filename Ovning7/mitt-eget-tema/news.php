<?php
include 'includes/header.php';
?>
<main>
  <section class="section">
    <div class="container">
      <div class="section-content">
        <div>
          <h3>Rese- och Kulturnyheter</h3>

          <hr>

          <p>Få de senaste uppdateringarna om resor, kultur, mat och tips för resenärer!</p>
        </div>
      </div>
    </div>
  </section>

  <div class="news-list">
    <!-- Exempel på nyheter -->
    <div class="container">
      <section>
        <h3>Semestrar & Resor</h3>
        <article>
          <div>
            <img src="images/travel1.jpg" alt="Bild på semesterort" class="news-thumbnail">
            <h4>10 fantastiska destinationer för 2024</h4>
            <p>Upptäck årets mest populära resmål för semestern...</p>
            <a href="single-news.php">Läs mer</a>
          </div>
        </article>
        <article>
          <div>
            <img src="images/travel2.jpg" alt="Vacker strand" class="news-thumbnail">
            <h4>Reseguide: Asiens bästa stränder</h4>
            <p>Vill du fly vardagen? Här är några av Asiens bästa stränder...</p>
            <a href="single-news.php">Läs mer</a>
          </div>
        </article>
      </section>

      <section>
        <h3>Kultur & Mat</h3>
        <article>
          <div>
            <img src="images/food1.jpg" alt="Traditionell maträtt" class="news-thumbnail">
            <h4>5 rätter du måste prova i Italien</h4>
            <p>Italien är känt för sin mat. Här är några rätter du inte får missa...</p>
            <a href="single-news.php">Läs mer</a>
          </div>
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
