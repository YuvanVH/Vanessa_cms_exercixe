<?php
include('functions.php');
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
    <section class="about">
      <div class="container">
        <h2>Om oss</h2>
        <p>Välkommen till vår nyhetsbyrå! Här på Världsvyer delar vi de senaste nyheterna från hela världen.</p>
      </div>
    </section>
  </main>

</body>

</html>
<?php include 'includes/footer.php'; ?>
