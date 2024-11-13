<?php include 'header.php'; ?>

<h2>Multiplikationstabell</h2>

<?php
// Multiplikationstabell
$tabell = 7; // <-- Ändra detta värde för att visa en annan tabell

echo "<p>Multiplikationstabellen för $tabell:</p>";
echo "<ul>";

for ($i = 1; $i <= 10; $i++) {
  $resultat = $tabell * $i;
  echo "<li>$tabell * $i = $resultat</li>";
}

echo "</ul>";
?>

<?php include 'footer.php'; ?>
