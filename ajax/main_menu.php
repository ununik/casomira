<?php
include __DIR__ . '/../autoload.php';

$container = '<div class="menu">';
$container .= '<div id="logo"></div>';
$container .= '<div onclick="page(\'startovni_listina\')" class="startovniListina menuButton"></div>';
$container .= '<div onclick="page(\'mereni_mezicasu\')" class="mereni menuButton"></div>';
$container .= '<div onclick="page(\'strelba\')" class="strelba menuButton"></div>';
$container .= '<div onclick="page(\'vysledky\')" class="vysledky menuButton"></div>';
$container .= '</div>';

print $container;