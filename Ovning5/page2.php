<?php include 'header.php'; ?>

<h2>Multiplikationstabell</h2>

<!-- **** Formulär för att välja ett nr att multiplusera med **** -->

<form method="post" action="">
  <label for="tabellNummer">Ange en siffra (1-9):</label>
  <input type="number" name="tabellNummer" id="nummer" min="1" max="9" required>
  <input type="submit" value="Visa tabell">
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['tabellNummer'])) {

  $tabellNummer = (int)$_POST['tabellNummer'];
  // Om det inskrivna nummret är större än 1 OCH mindre än 9
  if ($tabellNummer >= 1 && $tabellNummer <= 9) {
    echo "<hp>Multiplikationstabell för $tabellNummer:</p>";
    echo "<ul>";

    for ($i = 1; $i <= 9; $i++) {
      $resultat = $tabellNummer * $i;
      echo "<li>$tabellNummer * $i = $resultat</li>";
    }
    echo "</ul>";
  }
} else {
  echo "<p>Endast siffror mellan 1 och 9 är tillåtna.</p>";
}
?>

<?php include 'footer.php'; ?>
