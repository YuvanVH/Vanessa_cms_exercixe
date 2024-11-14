<?php include 'header.php'; ?>

<h2>Idag</h2>

<?php
// Allt va inte formaterat på svensk tid :(

// // Hämta dagens veckodag och datum
// $veckodag = date("l");  // Hämtar veckodagen (måndag, tisdag, etc.)
// $dag = date("j");  // Hämtar dagens datum (14, 15, etc.)
// $månad = date("F");  // Hämtar månaden (januari, februari, etc.)

// // Skriv ut veckodagen och datumet
// echo "<p>Idag är det $veckodag den $dag $månad.</p>";

/***********************************/

// // Visar dagens veckodag & datum
// $locale = 'sv_SE';
// $formatter = new IntlDateFormatter($locale, IntlDateFormatter::FULL, IntlDateFormatter::NONE);
// $formatter->setPattern('EEEE d MMMM'); // Sätter svensk datum format

// $veckodagDatum = $formatter->format(new DateTime());
// echo "<p>Idag är det $veckodagDatum.</p>";

/***********************************/

// Hämta dagens veckodag och datum
$veckodagar = array("söndag", "måndag", "tisdag", "onsdag", "torsdag", "fredag", "lördag");
$manader = array("januari", "februari", "mars", "april", "maj", "juni", "juli", "augusti", "september", "oktober", "november", "december");

$dagensVeckodag = $veckodagar[date("w")]; // "w" ger veckodag (0-6)
$dagensDatum = date("j"); // "j" ger dagens datum (1-31)
$manad = $manader[date("n") - 1]; // "n" ger månad (1-12), sub 1 för att passa array-index

// Skriv ut dagens veckodag o datum
echo "<p>Idag är det $dagensVeckodag den $dagensDatum $manad.</p>";

// Kontrollera om datumet är jämnt eller udda
$dagNummer = date("j");
if ($dagNummer % 2 === 0) {
  echo "<p>Den $dagNummer är ett jämnt datum.</p>";
} else {
  echo "<p>Den $dagNummer är ett udda datum.</p>";
}
?>

<!-- **** Formulär för att välja ett datum **** -->

<h2>Välj ett datum</h2>
<form method="post" action="">
  <label for="datum">Välj ett datum:</label>
  <input type="date" name="datum" id="datum" required>
  <input type="submit" value="Skicka">
</form>

<?php
// Hantera inmatat datum från användaren
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['datum'])) {
  $datum = $_POST['datum'];

  // Omvandla till tidsstämpel och extrahera veckodag och månad
  $timestamp = strtotime($datum);
  $veckodag = $veckodagar[date("w", $timestamp)];
  $dag = date("j", $timestamp);
  $manad = $manader[date("n", $timestamp) - 1];

  // Visa det valda datumet på svenska
  echo "<p>Du skrev in $veckodag den $dag $manad.</p>";

  // Kontrollera om det valda datumet är jämnt eller udda
  if ($dag % 2 === 0) {
    echo "<p>Den $dag är ett jämnt datum.</p>";
  } else {
    echo "<p>Den $dag är ett udda datum.</p>";
  }
}
?>

<?php include 'footer.php'; ?>
