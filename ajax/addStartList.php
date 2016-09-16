<?php
include __DIR__ . '/../autoload.php';

$kategorieClass = new Kategorie();

$kategorie = '';
foreach ($kategorieClass->getAllKategorie() as $option) {
	$kategorie .= '<option value="'.$option['id'].'">'.$option['long'].'</option>';
}

print '<div onclick="page(\'startovni_listina\')" class="backButton"></div>';
print '<div onclick="subpage(\'addStartList\')" class="reloadButton"></div>';

print '<h3>Nová startovní sekvence</h3>';
print '<div>Datum: <input type="text" value="'.date('d.m.Y').'" id="datum"/></div>';
print '<div>Čas startu prvního čísla: <input type="text" value="09:30:30" id="cas"/></div>';
print '<div>První číslo: <input type="number" id="prvniCislo" /></div>';
print '<div>Poslední číslo: <input type="number" id="posledniCislo" /></div>';
print '<div>Start po <input type="number" id="startPoS"/> s</div>';
print '<div>Kategorie <select id="kategorie" >'.$kategorie.'</select></div>';
print '<div onclick="createStartList()" class="add"></div>';
print '<div id="status"></div>';