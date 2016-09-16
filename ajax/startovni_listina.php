<?php
include __DIR__ . '/../autoload.php';

print '<div onclick="menu()" class="menuIcon"></div>';
print '<h1>Startovni Listina</h1>';
print '<div id="subpage">';
print '<div onclick="page(\'startovni_listina\')" class="reloadButton"></div>';
print '<div onclick="subpage(\'addStartList\')" class="add"></div>';
print '<div onclick="removeStartlist()" class="remove"></div>';
print '<div onclick="page(\'kategorie\')" class="kategorieButton"></div>';

$startovniListina = new StartovniListina();
$kategorie = new Kategorie;

print '<table>';
print '<tr><th>st. Číslo</th><th>Jméno</th><th>Kategorie</th><th>Start</th><th></th></tr>';
foreach ($startovniListina->getWholeStartList() as $info) {
    print '<tr>';
    print "<td>{$info['startovniCislo']}</td>";
    print "<td><div class='settings settingsRow' onclick=\"upravitJmeno('{$info['jmeno']}', '{$info['id']}')\"></div>{$info['jmeno']}</td>";
    print "<td>{$kategorie->getShortKategorie($info['kategorie'])}</td>";
    $start = date('H:i:s', $info['casStartu']);
    print "<td>$start</td>";
    print '<td><div class="remove removeRow" onclick="removeRow(\''.$info['id'].'\', \''.$info['startovniCislo'].'\')"></div></td>';
    print '</tr>';
}
print '</table>';

print '</div>';
