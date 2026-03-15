<?php

// 1. POBRANIE DANYCH Z FORMULARZA
$kwota = $_REQUEST["kwota"] ?? "";
$lata = $_REQUEST["lata"] ?? "";
$oprocentowanie = $_REQUEST["oprocentowanie"] ?? "";

// 2. SPRAWDZENIE, CZY DANE SĄ PODANE
// (najprostsza walidacja – tylko sprawdzamy, czy pola nie są puste)
if ($kwota !== "" && $lata !== "" && $oprocentowanie !== "") {

    // 3. PRZYGOTOWANIE DANYCH DO OBLICZEŃ
    // zamiana tekstu na liczby
    $kwota = floatval($kwota);
    $lata = intval($lata);
    $oprocentowanie = floatval($oprocentowanie);

    // 4. WYKONANIE OBLICZEŃ RATY
    // obliczamy liczbę rat i oprocentowanie miesięczne
    $n = $lata * 12;
    $r = ($oprocentowanie / 100) / 12;

    // wzór na ratę kredytu
    if ($r == 0) {
        // przypadek bez odsetek
        $wynik = $kwota / $n;
    } else {
        // standardowy wzór na ratę annuitetową
        $wynik = $kwota * ($r * pow(1 + $r, $n)) / (pow(1 + $r, $n) - 1);
    }

} else {
    // jeśli nie ma danych, nie liczymy nic
    $wynik = null;
}

// 5. WYŚWIETLENIE WIDOKU (HTML)
// tutaj dołączamy plik odpowiedzialny za wygląd
include "kalkulator_view.php";
