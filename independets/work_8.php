<?php
$numbers = [9, 7, 3, 2, 4, 8];
sort($numbers);
echo "Массив в порядке возрастания: ". implode(", ",$numbers) . "\n";

rsort($numbers);
echo "Массив в порядке убывания: ". implode(", ",$numbers) . "\n";

?>