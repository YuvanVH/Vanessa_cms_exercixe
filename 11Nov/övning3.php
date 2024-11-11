<?php

// Funktion för att skapa en beställningsbeskrivning
function beställning($order)
{
  // Extrahera värden från arrayen
  $bordNr = $order["bordNr"];
  $fruktLista = implode(", ", $order["frukt"]); // Gör om frukt-arrayen till en sträng
  $extra = isset($order["extra"]) ? "<br> Med extra: {$order['extra']}" : "";

  // Returnera beskrivningen av beställningen
  return "Beställningen ska till: Bord $bordNr.<br> Innehåller frukter: $fruktLista.$extra";
}

// Skapa en test-beställning
$order = [
  "bordNr" => 5,
  "frukt" => ["apelsin", "äpple", "banan"],
  "extra" => "extra av allt!"
];

// Testa funktionen och skriv ut resultatet
echo beställning($order);
