<?php
$inputString = "Я люблю свинок";
$wordsArray = explode(" ", $inputString);
echo "Массив слов: ". implode(", ",$wordsArray) . "\n";
?>