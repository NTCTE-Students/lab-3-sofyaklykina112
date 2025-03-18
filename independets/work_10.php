<?php
$table = [
    ['цвет', 'название', 'порода'],
    ['розовый', 'свинка', 'минипиг'],
    ['белый', 'собака', 'шпиц'],
    ['серый', 'кошка', 'сиамская'],
];
echo "<table border='1'>";
foreach ($table as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>"; // Используем htmlspecialchars для защиты от XSS
    }
    echo "</tr>";
}
echo "</table>";
?>
