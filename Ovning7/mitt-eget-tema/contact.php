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
    <section class="contact">
      <div class="container">
        <h2>Kontakta oss</h2>
        <form action="submit_form.php" method="post">
          <label for="name">Ditt namn:</label>
          <input type="text" id="name" name="name" required>

          <label for="email">Din e-post:</label>
          <input type="email" id="email" name="email" required>

          <label for="message">Ditt meddelande:</label>
          <textarea id="message" name="message" required></textarea>

          <button type="submit">Skicka</button>
        </form>
      </div>
    </section>
  </main>

</body>
<?php include 'includes/footer.php'; ?>

</html>
