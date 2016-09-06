<?php
include __DIR__ . '/../autoload.php';

$container = '<div class="menu">';
$container .= '<div onclick="page(\'kategorie\')" class="startovniListina menuButton"></div>';
$container .= '<div onclick="page(\'startovni_listina\')" class="startovniListina menuButton"></div>';
$container .= '<div onclick="page(\'mereni_mezicasu\')" class="startovniListina menuButton"></div>';
$container .= '<div onclick="page(\'vysledky\')" class="startovniListina menuButton"></div>';
$container .= '</div>';

print $container;