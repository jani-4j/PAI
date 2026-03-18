<?php ob_start(); ?>

<h2 class="mb-4">Kalkulator kredytowy</h2>

<form method="POST" action="kalkulator.php" class="mb-4">
    <div class="mb-3">
        <label class="form-label">Kwota kredytu</label>
        <input type="number" name="kwota" step="0.01" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Liczba lat</label>
        <input type="number" name="lata" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Oprocentowanie (%)</label>
        <input type="number" name="oprocentowanie" step="0.01" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Oblicz ratę</button>
</form>

<?php
if ($wynik !== null) {
    echo "<div class='alert alert-success'><strong>Miesięczna rata:</strong> " 
         . number_format($wynik, 2, ',', ' ') . " zł</div>";
}

$content = ob_get_clean();
$title = "Kalkulator kredytowy";

include "template.php";
