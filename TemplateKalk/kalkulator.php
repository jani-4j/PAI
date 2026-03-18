<?php

$kwota = $_REQUEST["kwota"] ?? "";
$lata = $_REQUEST["lata"] ?? "";
$oprocentowanie = $_REQUEST["oprocentowanie"] ?? "";

if ($kwota !== "" && $lata !== "" && $oprocentowanie !== "") {

    $kwota = floatval($kwota);
    $lata = intval($lata);
    $oprocentowanie = floatval($oprocentowanie);

    $n = $lata * 12;
    $r = ($oprocentowanie / 100) / 12;

    if ($r == 0) {
        $wynik = $kwota / $n;
    } else {
        $wynik = $kwota * ($r * pow(1 + $r, $n)) / (pow(1 + $r, $n) - 1);
    }

} else {
    $wynik = null;
}

include "kalkulator_view.php";
