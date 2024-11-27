<?php
include 'includes/header.php';
?>
<link rel="stylesheet" href="css/contact.css">
<main>

  <main>
    <section class="section contact">

      <div class="container">
        <div class="section-content">

          <h3>Kontakta oss</h3>
          <hr>
          <p>Har du några frågor eller behöver hjälp? Fyll i formuläret nedan, så återkommer vi så snart som möjligt.</p>

          <form action="submit_form.php" method="post" class="contact-form">
            <div class="form-group">
              <label for="name">Ditt namn:</label>
              <input type="text" id="name" name="name" placeholder="Ange ditt namn" required>
            </div>

            <div class="form-group">
              <label for="email">Din e-post:</label>
              <input type="email" id="email" name="email" placeholder="Ange din e-postadress" required>
            </div>

            <div class="form-group">
              <label for="message">Ditt meddelande:</label>
              <textarea id="message" name="message" placeholder="Skriv ditt meddelande här" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Skicka</button>
          </form>
        </div>
      </div>

    </section>

    <!-- Sektion med omvänd layout -->
    <section class="section section--reverse">
      <div class="container">
        <div class="section-content">
          <img src="images/contact-bg.jpg" alt="Bild på en kvinna med telefon">
          <div>
            <h3>Kontaktuppgifter</h3>
            <p><strong>Adress:</strong> Kungsgatan 123, 111 22 Stockholm, Sverige</p>
            <p><strong>Telefon:</strong> +46 8 123 45 67</p>
            <p><strong>E-post:</strong> <a href="mailto:info@varldsvyer.se">info@varldsvyer.se</a></p>
            <p><strong>Öppettider:</strong></p>
            <ul class="custom-list">
              <li>Måndag - Fredag: 09:00 - 17:00</li>
              <li>Lördag: 10:00 - 14:00</li>
              <li>Söndag: Stängt</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>


  <?php include 'includes/footer.php'; ?>
