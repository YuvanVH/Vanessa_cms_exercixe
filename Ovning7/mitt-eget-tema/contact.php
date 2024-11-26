<?php
include 'includes/header.php';
?>

<main>
  <section class="contact">
    <div class="container">
      <h3>Kontakta oss</h3>
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

<?php include 'includes/footer.php'; ?>
