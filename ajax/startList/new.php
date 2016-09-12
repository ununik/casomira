<?php
include __DIR__ . '/../../autoload.php';
$datum = strtotime($_POST['datum'].' '.$_POST['cas']);

for($i = $_POST['prvniCislo']; $i <= $_POST['posledniCislo']; $i++){
      $result = Connection::connect()->prepare(
          'SELECT id FROM `startovniListina` WHERE startovniCislo = :startovniCislo;'
      );
    
      $result->execute(array(
          ':startovniCislo' => $i
      ));
      $number = $result->fetch();
      if (isset($number['id']) && $number['id']!='') {
          print "Číslo $i bylo ve startovce už dříve.<br>";
          continue;
      }
      
      $result = Connection::connect()->prepare(
          'INSERT INTO `startovniListina`(`startovniCislo`, `casStartu`) VALUES (:startovniCislo, :casStartu);'
      );
    
      $result->execute(array(
          ':startovniCislo' => $i,
          ':casStartu' => $datum
      ));

    $datum = $datum + $_POST['startPo'];
}
print 'Hotovo';