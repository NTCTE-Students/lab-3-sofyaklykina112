<?php

$elements = ['свинка','персик','ананас'];


$searchItem = 'ананас';

$index = array_search($searchItem, $elements);

if ($index !== false) {
    echo "Элемент '$searchItem' найден на индексе: $index";
} else {
    echo "Элемент '$searchItem' не найден в массиве.";
}
?>