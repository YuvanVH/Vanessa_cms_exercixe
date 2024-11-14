<?php include 'header.php'; ?>

<h1>Välkommen!</h1>

<h2>Vänligen skriv in ditt namn</h2>
<form method="post" action="">
  <label for="name">Namn:</label>
  <input type="text" name="name" id="name" required>
  <input type="submit" value="Skicka">
</form>

<?php
// Dynamisk hälsning baserat på tid på dygnet
$greetings = ["God morgon", "God förmiddag", "God eftermiddag", "God kväll"];
$hour = date("H");

if ($hour < 10) {
  $greeting = $greetings[0]; // God morgon
} elseif ($hour < 12) {
  $greeting = $greetings[1]; // God förmiddag
} elseif ($hour < 18) {
  $greeting = $greetings[2]; // God eftermiddag
} else {
  $greeting = $greetings[3]; // God kväll
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name'])) {
  $name = htmlspecialchars($_POST['name']);
  echo "<p>$greeting, $name!</p>";
}

?>

<?php include 'footer.php'; ?>
