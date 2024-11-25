<?php include 'includes/header.php'; ?>

<main>
  <h2>Kontakta oss</h2>
  <form method="post" action="thankyou.php">
    <label for="name">Namn:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">E-post:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Meddelande:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Skicka</button>
  </form>
</main>

<?php include 'includes/footer.php'; ?>
