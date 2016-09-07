<?php
include __DIR__ . '/../autoload.php';

print '<div onclick="menu()" class="menuIcon"></div>';
print '<h1>Startovni Listina</h1>';
print '<div id="subpage">';
print '<div onclick="subpage(\'addStartList\')" class="add"></div>';
print '<div onclick="page(\'startovni_listina\')" class="reloadButton"></div>';

print '</div>';
