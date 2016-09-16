<?php
include __DIR__ . '/../../autoload.php';

$timestamp = $_POST['timestamp'];
$id = $_POST['id'];
$startovka = new StartovniListina();
$athlete = $startovka->getStartListRow($id);

print '<div class="vysledkyTitle">Oprava čísla '.$athlete['startovniCislo'];
if ($athlete['jmeno'] != '') {
	print ' ('.$athlete['jmeno'].')';
}
print '</div>';

print '<div>Smazat poslední mezičas <div class="remove" onclick="deleteLastMezicas(\''.$id.'\')"></div></div>';

print '<div>Přidat nový mezičas <div class="add" onclick="addNewTime(\''.$id.'\', \''.$timestamp.'\')"></div></div>';