<?php
include __DIR__ . '/../../autoload.php';
$strelba = new Strelba();
$startovniListina = new StartovniListina();

$athlete = $startovniListina->getStartListRow($_POST['id']);


print '<h4>';
print 'St. číslo ' . $athlete['startovniCislo'];
if ($athlete['jmeno'] != '') {
    print ' ('.$athlete['jmeno'].')';
}
print '</h4>';

$targets = array('a', 'b', 'c', 'd', 'e');
foreach ($strelba->getAllShootingsForNumber($athlete['id']) as $shooting) {
    print '<div class="ResultShooting" onclick="atShootingRange(\''. $athlete['id'].'\', \''. $shooting['cislo_strelby'].'\')">';
    print '<div class="cisloStrelby">'.$shooting['cislo_strelby'] . '</div>';
    foreach ($targets as $target) {
        print '<div class="smallTarget';
        if ($shooting[$target] == 1) {
            print ' hitTarget';
        }
        print '"></div>';
    }
    print '</div>';
    
    $i = $shooting['cislo_strelby'];
}
$i++;

print '<div onclick="atShootingRange(\''. $athlete['id'].'\', \''. $i.'\')">';
print '<div class="cisloStrelby">'.$i . '</div>';
print '<div onclick="atShootingRange(\''. $athlete['id'].'\', \''. $i.'\')" class="add"></div>';
print '</div>';