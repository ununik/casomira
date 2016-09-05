<?php
include __DIR__ . '/../autoload.php';

$container = '<div onclick="page(\'kategorie\')">Kategorie</div>';
$container .= '<div onclick="page(\'startovni_listina\')">Startovní listina</div>';
$container .= '<div onclick="page(\'mereni_mezicasu\')">Měření mezičasů</div>';
$container .= '<div onclick="page(\'vysledky\')">Výsledky</div>';

print $container;