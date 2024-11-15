<?php include 'header.php'; ?>

<h2>Kalkylator för elpris</h2>

<!-- Kalkylator för elpris -->

<form method="post" action="">
  <label for="pris">Aktuellt elpris (kr/KwH):</label>
  <input type="number" step="0.01" name="pris" id="pris" required>
  <br>
  <label for="forbrukning">Aktuell förbrukning (KwH):</label>
  <input type="number" name="forbrukning" id="forbrukning" required>
  <br>
  <input type="submit" value="Beräkna">
</form>

<?php
// Kontrollera om formuläret har skickats via POST-begäran

// kollar om både "pris" o "forbrukning" fälten ej tomma
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['pris']) && !empty($_POST['forbrukning'])) {

  // Hämta värdet från formulärfältet "pris" & "forbrukning", omvandla till flyttal (decimal)
  $pris = (float)$_POST['pris'];
  $forbrukning = (float)$_POST['forbrukning'];

  // Beräkna kostnaden genom multiplicera priset + förbrukningen
  $kostnad = round($pris * $forbrukning, 2);
  // Round() för att runda av till 2 decimaler ^^

  echo "<p>Det beräknade elpriset blir $kostnad kronor.</p>";
} else {

  // felhantering
  echo "<p>Vänligen ange giltiga positiva tal för pris och förbrukning.</p>";
}

?>

<?php include 'footer.php'; ?>
