<?php
// Funktion för hämtning av rätt css-fil
function getCssStyleFile()
{
  // Hämta filnamnet beroende på sida
  $current_page = basename($_SERVER['PHP_SELF']);

  // Ladda specifik CSS-fil baserat på vilken sida
  switch ($current_page) {
    case 'index.php':
      return '<link rel="stylesheet" href="css/style.css">';
      break;
    case 'news.php':
      return '<link rel="stylesheet" href="css/style.css">';
      break;
    case 'single-news.php':
      return '<link rel="stylesheet" href="css/style.css">';
      break;
    case 'about.php':
      return '<link rel="stylesheet" href="css/style.css">';
      break;
    case 'contact.php':
      return '<link rel="stylesheet" href="css/contact.css">'; // unik
      break;
    case '404.php':
      return '<link rel="stylesheet" href="css/404.css">'; //FIXA
      break;
    default:
      // Om sidan inte matchar, style.css laddas upp
      return '<link rel="stylesheet" href="css/style.css">';
  }
}
?>

<?php
// Funktion för att hämta bakgrundsbild beroende på sidan
function getBackgroundImage()
{
  $page = basename($_SERVER['PHP_SELF']);  // Hämta sidans filnamn

  // Kontrollera filnamnet och returnera rätt bakgrundsbild
  switch ($page) {
    case 'about.php':
      return 'images/about-bg.jpg';
    case 'contact.php':
      return 'images/contact-bg.jpg';
    case 'news.php':
      return 'images/news-bg.jpg';
    case 'index.php':
      return 'images/default-bg.jpg';
    default:
      return 'images/default-bg.jpg';  // Standard bakgrundsbild som jag ska leta upp
  }
}

// Funktion för att hämta slogan beroende på sidan
function getPageSlogan()
{
  $page = basename($_SERVER['PHP_SELF']);

  switch ($page) {
    case 'about.php':
      return 'Läs mer om oss och vår resa.';
    case 'contact.php':
      return 'Vi är här för att hjälpa dig.';
    case 'news.php':
      return 'Håll dig uppdaterad med de senaste nyheterna.';
    default:
      return 'Varje resa börjar med ett första steg – ta det här.';
  }
}

// Funktion för att hämta sidans titel
function getPageTitle()
{
  $page = basename($_SERVER['PHP_SELF']);

  switch ($page) {
    case 'about.php':
      return '-Om Oss-';
    case 'contact.php':
      return '-Kontakta Oss-';
    case 'news.php':
      return '-Nyheter-';
    default:
      return '-Världsvyer-';
  }
}
