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
        <?php include 'includes/menu.php'; ?>
        <div class="hero-content">
          <p class="slogan"><?php echo getPageSlogan(); ?></p>
          <h1><?php echo getPageTitle(); ?></h1>
        </div>
      </div>
    </div>
  </header>
  <!-- Resten av sidan här -->

  <div class="hero-text">
    <p class="slogan">Varje resa börjar med ett första steg – ta det här.</p>
    <h1>Världsvyer</h1>
  </div>

</body>

</html>

<?php include 'includes/footer.php'; ?>
