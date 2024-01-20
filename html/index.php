<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobieranie danych z formularza
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $start = $_POST["start"];
    $end = $_POST["end"];

    // Obliczanie wartości funkcji kwadratowej i wyświetlanie wyników
    echo "<h2>Wyniki:</h2>";
    for ($x = $start; $x <= $end; $x++) {
        $result = ($a * $x * $x) + ($b * $x) + $c;
        echo "Dla x = $x, y = $result<br>";
    }
}
?>