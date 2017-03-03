<?php
include __DIR__ . '/../autoload.php';

print '<div onclick="menu()" class="menuIcon"></div>';
print '<h1>Kategorie</h1>';
print '<div id="subpage">';
print '<div onclick="page(\'startovni_listina\')" class="backButton"></div>';
print '<div onclick="page(\'kategorie\')" class="reloadButton"></div>';
// print '<div onclick="subpage(\'addStartList\')" class="add"></div>';

print '<table>';
$kategorieClass = new Kategorie();
foreach ($kategorieClass->getAllKategorie() as $kategorie) {
    print '<tr>';
    print 
            '<td><div class="settings settingsRow" onclick="changeCategoryShort(\'' .
                     $kategorie['short'] . '\', \'' . $kategorie['id'] .
                     '\')"></td><td>' . $kategorie['short'] . '</td>';
    print 
            '<td><div class="settings settingsRow" onclick="changeCategoryLong(\'' .
                     $kategorie['long'] . '\', \'' . $kategorie['id'] .
                     '\')"></td><td>' . $kategorie['long'] . '</td>';
    print '<td><div class="remove removeRow"></td>';
    print '</tr>';
}
print '</table>';
print '<div id="status"></div>';