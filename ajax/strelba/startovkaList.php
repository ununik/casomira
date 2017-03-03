<?php
include __DIR__ . '/../../autoload.php';

$startovniListina = new StartovniListina();
$mezicas = new Mezicas();
$strelba = new Strelba();
$lastNumber = $strelba->getLastAthletonShootingRange();
foreach ($startovniListina->getWholeStartList() as $info) {
    
    $lastMezicas = $strelba->getLastStrelbaForAthlete($info['id']);
    if ($lastNumber == $info['id']) {
        print '<div class="lastNumber">';
    } else 
        if ($info['casStartu'] > time()) {
            print '<div class="notStarted">';
        } else 
            if ($lastMezicas != 0 && $lastMezicas < 9) {
                print '<div class="mezicas' . $lastMezicas . ' mezicas">';
            } else 
                if ($lastMezicas > 8) {
                    print '<div class="mezicasMoreThan8 mezicas">';
                    print "<div class='cisloMezicasu'>$lastMezicas</div>";
                } else {
                    print '<div class="wrapper">';
                }
    print '<div class="cislo" ';
    if ($lastNumber == $info['id']) {
        print ' onclick="getAllShootingsForNumber(\'' . $info['id'] . '\')" ';
    } else {
        $new = $lastMezicas + 1;
        print ' onclick="atShootingRange(\'' . $info['id'] . '\', \'' . $new . '\')" ';
    }
    print '><div class="number">' . $info['startovniCislo'] . '</div></div>';
    print '</div>';
}

$newTime = $startovniListina->getNearestStart();
if ($newTime != 0) {
    $time = $newTime - time();
    $time = $time * 1000;
    if ($time > 0) {
        print 
                '<script>setTimeout(function(){startovkaListStrelba();},' . $time .
                         ');</script>';
    }
}