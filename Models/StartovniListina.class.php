<?php
class StartovniListina
{
    public function getWholeStartList()
    {
     $result = Connection::connect()->prepare(
          'SELECT id, startovniCislo, casStartu, jmeno, kategorie FROM `startovni_listina` ORDER BY casStartu, startovniCislo;'
      );
    
      $result->execute();
      return $result->fetchAll();
    }
    
    public function getStartListRow($id)
    {
    	$result = Connection::connect()->prepare(
    			'SELECT id, startovniCislo, casStartu, jmeno, kategorie FROM `startovni_listina` WHERE id=:id;'
    			);
    	
    	$result->execute(array(':id' => $id));
    	return $result->fetch();
    }
    
    public function removeAll()
    {
      $result = Connection::connect()->prepare(
          'DELETE FROM `startovni_listina` WHERE 1;ALTER TABLE startovni_listina AUTO_INCREMENT = 1;'
      );
    
      $result->execute();
      
      $result = Connection::connect()->prepare(
      		'DELETE FROM `mezicas` WHERE 1;ALTER TABLE mezicas AUTO_INCREMENT = 1;'
      		);
      
      $result->execute();
    }
    
    public function removeId($id)
    {
       $result = Connection::connect()->prepare(
          'DELETE FROM `startovni_listina` WHERE id=:id;'
      );
    
      $result->execute(array(':id' => $id));
      
      $result = Connection::connect()->prepare(
      		'DELETE FROM `mezicas` WHERE startovni_listina_id=:id;'
      		);
      
      $result->execute(array(':id' => $id));
    }
    
    public function getNearestStart()
    {
    	$result = Connection::connect()->prepare(
    			'SELECT casStartu FROM `startovni_listina` WHERE casStartu > :time  ORDER BY casStartu;'
    			);
    	
    	$result->execute(array(':time' => time()));
    	
    	$cas = $result->fetch();
    	if (isset($cas['casStartu'])) {
    		return $cas['casStartu'];
    	} 
    	
    	return 0;
    }
}