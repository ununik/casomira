<?php
class Kategorie
{
	public function getAllKategorie()
	{
		$result = Connection::connect()->prepare(
				'SELECT * FROM `kategorie`;'
				);
		
		$result->execute();
		return $result->fetchAll();
	}
	
	public function getShortKategorie($id)
	{
		$result = Connection::connect()->prepare(
				'SELECT short FROM `kategorie` WHERE id=:id;'
				);
	
		$result->execute(array(':id' => $id));
		$kategorie = $result->fetch();
		
		return $kategorie['short'];
	}
}