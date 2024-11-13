<?php include 'header.php'; ?>

<h2>Idag</h2>

<?php

// allt va inte formaterat på svensk tid :(

// // Hämta dagens veckodag och datum
// $veckodag = date("l");  // Hämtar veckodagen (måndag, tisdag, etc.)
// $dag = date("j");  // Hämtar dagens datum (14, 15, etc.)
// $månad = date("F");  // Hämtar månaden (januari, februari, etc.)

// // Skriv ut veckodagen och datumet
// echo "<p>Idag är det $veckodag den $dag $månad.</p>";

// // Kontrollera om datumet är jämnt eller udda
// if ($dag % 2 === 0) {
//   echo "<p>Den $dag $månad är ett jämnt datum.</p>";
// } else {
//   echo "<p>Den $dag $månad är ett udda datum.</p>";
// }
//
?>


<?php
// Visar dagens veckodag & datum
$locale = 'sv_SE';
$formatter = new IntlDateFormatter($locale, IntlDateFormatter::FULL, IntlDateFormatter::NONE);
$formatter->setPattern('EEEE d MMMM'); // Sätter svensk datum format

$veckodagDatum = $formatter->format(new DateTime());
echo "<p>Idag är det $veckodagDatum.</p>";

// Kontrollera om datumet är jämnt eller udda
$dagNummer = date("j");
if ($dagNummer % 2 === 0) {
  echo "<p>Den $dagNummer är ett jämnt datum.</p>";
} else {
  echo "<p>Den $dagNummer är ett udda datum.</p>";
}
?>

<?php include 'footer.php'; ?>
