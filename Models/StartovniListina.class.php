<?php
class StartovniListina
{
    public function getWholeStartList() {
     $result = Connection::connect()->prepare(
          'SELECT id, startovniCislo, casStartu, jmeno FROM `startovniListina` ORDER BY casStartu;'
      );
    
      $result->execute();
      return $result->fetchAll();
    }
    
    public function removeAll() {
      $result = Connection::connect()->prepare(
          'DELETE FROM `startovniListina` WHERE 1;'
      );
    
      $result->execute();
    }
    
    public function removeId($id) {
       $result = Connection::connect()->prepare(
          'DELETE FROM `startovniListina` WHERE id=:id;'
      );
    
      $result->execute(array(':id' => $id));
    }
}