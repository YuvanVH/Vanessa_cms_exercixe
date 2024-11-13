<?php include 'header.php'; ?>

<h2>Välkommen till min webbplats!</h2>

<?php
// Dynamisk hälsning baserat på tid på dygnet
$greetings = ["God morgon", "God förmiddag", "God eftermiddag", "God kväll"];
$hour = date("H");

if ($hour < 10) {
  $greeting = $greetings[0];
} elseif ($hour < 14) {
  $greeting = $greetings[1];
} elseif ($hour < 18) {
  $greeting = $greetings[2];
} else {
  $greeting = $greetings[3];
}

echo "<p>$greeting!</p>";
?>

<?php include 'footer.php'; ?>
