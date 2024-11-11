<?php

// Funktion för att kontrollera om ett tal är ett primtal
function is_prime($number)
{
  if ($number <= 1) {
    return false; // Tal mindre än 2 EJ ett primtal
  }

  // Kontrollera om talet är jämnt delbart med något tal från 2 upp till talet före
  for ($i = 2; $i < $number; $i++) {
    if ($number % $i == 0) {
      return false; // Om det är delbart, EJ ett primtal
    }
  }

  return true; // Om inget tal delade det jämnt, är det ett primtal
}

// Testa funktionen
$tal = 7;
if (is_prime($tal)) {
  echo "$tal är ett primtal.";
} else {
  echo "$tal är inte ett primtal.";
}
