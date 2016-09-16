<?php
include __DIR__ . '/../../autoload.php';

$startovniListina = new StartovniListina();
$mezicas = new Mezicas();
$lastNumber = $mezicas->getLastAthletInMezicas();
foreach ($startovniListina->getWholeStartList() as $info) {

	$lastMezicas = $mezicas->getLastMezicasForAthlete($info['id']);
	if ($lastNumber == $info['id']) {
		print '<div class="lastNumber">';
	} else if ($info['casStartu'] > time()) {
		print '<div class="notStarted">';
	} else if($lastMezicas != 0 && $lastMezicas < 9) {
		print '<div class="mezicas'.$lastMezicas.' mezicas">';
	} else if($lastMezicas > 8) {
		print '<div class="mezicasMoreThan8 mezicas">';
		print "<div class='cisloMezicasu'>$lastMezicas</div>";
	} else {
		print '<div class="wrapper">';
	}
	print '<div class="cislo" ';
	if ($lastNumber == $info['id']) {
		print ' onclick="secondClick(\''.$info['id'].'\')" ';
	} else {
		print ' onclick="addNewTime(\''.$info['id'].'\', 0)" ';
	}
	print '><div class="number">'.$info['startovniCislo'].'</div></div>';
	print '</div>';
}

$newTime = $startovniListina->getNearestStart();
if ($newTime != 0) {
	$time = $newTime - time();
	$time = $time*1000;
	if ($time > 0) {
		print '<script>setTimeout(function(){startovkaList();},'.$time.');</script>';
	}
}