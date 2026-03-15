<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator kredytowy</title>
</head>
<body>

<h2>Kalkulator kredytowy</h2>

<!-- FORMULARZ DO WPROWADZANIA DANYCH -->
<!-- Po kliknięciu "Oblicz" dane lecą do kalkulator.php -->
<form method="POST" action="kalkulator.php">
    Kwota kredytu: <input type="number" name="kwota" step="0.01" required><br><br>
    Liczba lat: <input type="number" name="lata" required><br><br>
    Oprocentowanie (%): <input type="number" name="oprocentowanie" step="0.01" required><br><br>
    <button type="submit">Oblicz ratę</button>
</form>

<?php
// JEŚLI MAMY WYNIK, TO GO WYŚWIETLAMY
if ($wynik !== null) {
    echo "<h3>Miesięczna rata: " . number_format($wynik, 2, ',', ' ') . " zł</h3>";
}
?>

</body>
</html>
