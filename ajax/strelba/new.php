<?php
include __DIR__ . '/../../autoload.php';

$startovniListina = new StartovniListina();
$strelba = new Strelba();

$athlete = $startovniListina->getStartListRow($_POST['id']);
$aktualniStrelba = $strelba->getLastStrelbaForAthlete($athlete['id'])+1;
$shootingResult = array(
    0, 0, 0, 0, 0
);
if (isset($_POST['actualShooting'])) {
    $aktualniStrelba = $_POST['actualShooting'];
    $result = $strelba->getStrelbaCislo($athlete['id'], $aktualniStrelba);
    $shootingResult = array(
        $result['a'],$result['b'],$result['c'],$result['d'],$result['e']
    );
}

print '<h4>';
print 'St. číslo ' . $athlete['startovniCislo'];
if ($athlete['jmeno'] != '') {
    print ' ('.$athlete['jmeno'].')';
}
print '</h4>';

for ($i = 1; $i <= $strelba->getLastStrelbaForAthlete($athlete['id'])+1; $i++) {
    print '<div onclick="atShootingRange(\''.$athlete['id'].'\', \''. $i .'\')" class="cisloStrelby" ';
    if ($i == $_POST['actualShooting']) {
        print 'id="actualShooting"';
    }
    print '>' . $i . '</div>';
}

print '<div id="mainTarget">';
for ($i = 0; $i < 5; $i++) {
    if ($shootingResult[$i] == 0) {
        print '<div class="target" id="target_'.$i.'" onclick="hit(\''.$athlete['id'].'\', \''.$aktualniStrelba.'\', \''.$i.'\')"></div>';
        print '<input type="checkbox" id="checkboxForTarget'.$i.'" hidden>';
    } else {
        print '<div class="target hitTarget" id="target_'.$i.'" onclick="miss(\''.$athlete['id'].'\', \''.$aktualniStrelba.'\', \''.$i.'\')"></div>';
        print '<input type="checkbox" checked id="checkboxForTarget'.$i.'" hidden>';
    }
}
print '</div>';

print '<div onclick="newShooting(\''.$athlete['id'].'\', \''.$aktualniStrelba.'\')" class="done"></div>';