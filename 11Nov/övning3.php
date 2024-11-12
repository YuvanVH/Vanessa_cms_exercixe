<?php

// Funktion för att skapa en beställningsbeskrivning
function beställning($order)
{
  // Extrahera värden från arrayen
  $bordNr = $order["bordNr"];

  // Skapa sträng för fruktlista
  $fruktLista = "";
  foreach ($order["frukt"] as $frukt) {
    $fruktLista .= $frukt . " "; // Lägg till varje frukt i sträng
  }

  // Kontrollera om extra beställning finns
  $extra = "";
  if (array_key_exists("extra", $order)) {
    $extra = "<br>Med extra: " . $order["extra"];
  }

  // Returnera beskrivning av beställning
  return "Beställningen ska till: Bord $bordNr.<br>Innehåller frukter: $fruktLista.$extra";
}

// Skapar test-beställning
$order = [
  "bordNr" => 5,
  "frukt" => ["apelsin", "äpple", "banan"],
  "extra" => "extra av allt!"
];

// Testa funktionen o skriv ut resultat
echo beställning($order);
