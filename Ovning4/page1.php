<?php include 'header.php'; ?>

<h2>Idag</h2>

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
