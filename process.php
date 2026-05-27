<?php
// Odczyt danych przeslanych metoda POST
$imie = $_POST['imie'] ?? '';
$nazwisko = $_POST['nazwisko'] ?? '';
// Zabezpieczenie przed XSS
$imie = htmlspecialchars($imie);
$nazwisko = htmlspecialchars($nazwisko);
?>
<!DOCTYPE html>
<html lang="pl">
<head><meta charset="UTF-8"><title>Powitanie</title></head>
<body>
  <h1>Witaj, <?= $imie ?> <?= $nazwisko ?>!</h1>
  <p><a href="index.html">« Wróć do formularza</a></p>
</body>
</html>
