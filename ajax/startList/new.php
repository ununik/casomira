<?php
include __DIR__ . '/../../autoload.php';
$datum = strtotime($_POST['datum'] . ' ' . $_POST['cas']);

for ($i = $_POST['prvniCislo']; $i <= $_POST['posledniCislo']; $i ++) {
    $result = Connection::connect()->prepare(
            'SELECT id FROM `startovni_listina` WHERE startovniCislo = :startovniCislo;');
    
    $result->execute(array(
        ':startovniCislo' => $i
    ));
    $number = $result->fetch();
    if (isset($number['id']) && $number['id'] != '') {
        print "Číslo $i bylo ve startovce už dříve.<br>";
        continue;
    }
    $kategorie = $_POST['kategorie'];
    
    $result = Connection::connect()->prepare(
            'INSERT INTO `startovni_listina` (`startovniCislo`, `casStartu`, `kategorie`) VALUES (:startovniCislo, :casStartu, :kategorie);');
    
    $result->execute(
            array(
                ':startovniCislo' => $i,
                ':casStartu' => $datum,
                ':kategorie' => $kategorie
            ));
    
    $datum = $datum + $_POST['startPo'];
}
print 'Hotovo';