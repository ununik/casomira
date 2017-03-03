<?php
class Mezicas extends Connection
{
	private $navigation = '';
	private $form = '';

	public function addToNavigation($new)
	{
		$this->navigation .= $new;
	}

	public function getNavigation()
	{
		return $this->navigation;
	}

	public function setForm($new)
	{
		$this->form = $new;
	}

	public function getForm() {
		return $this->form;
	}

	public function getListForNumber($number)
	{
		$db = parent::connect();
		$result = $db->prepare("SELECT * FROM `startList` WHERE `number`=? ");
		$result->execute(array($number));
		$item = $result->fetch();

		return $item;
	}

	public function saveNewMezicas($number, $timestamp, $field)
	{
		$db = parent::connect();
		$result = $db->prepare("UPDATE `startList` SET $field=? WHERE `id`=? ");
		$result->execute(array($timestamp, $number));
	}

	public function getAllCompetitorsFromCategory($category, $field)
	{
		$db = parent::connect();
		$result = $db->prepare("SELECT $field, startTimestamp, id FROM `startList` WHERE `category`=? ORDER BY $field");
		$result->execute(array($category));
		$items = $result->fetchAll();

		return $items;
	}

	public function getCompetitor($id)
	{
		$db = parent::connect();
		$result = $db->prepare("SELECT * FROM `startList` WHERE `id`=? ");
		$result->execute(array($id));
		$item = $result->fetch();

		return $item;
	}

	public function getCountOfMezicas($category)
	{
		$db = parent::connect();
		$result = $db->prepare("SELECT `id` FROM `startList` WHERE `category`=? && `mezicas10`!=? ");
		$result->execute(array($category, 0));
		$item = $result->fetch();
		if($item['id'] != "" || $item['id'] != 0){
			return 10;
		}
		$result = $db->prepare("SELECT `id` FROM `startList` WHERE `category`=? && `mezicas9`!=? ");
		$result->execute(array($category, 0));
		$item = $result->fetch();
		if($item['id'] != "" || $item['id'] != 0){
			return 9;
		}
		$result = $db->prepare("SELECT `id` FROM `startList` WHERE `category`=? && `mezicas8`!=? ");
		$result->execute(array($category, 0));
		$item = $result->fetch();
		if($item['id'] != "" || $item['id'] != 0){
			return 8;
		}
		$result = $db->prepare("SELECT `id` FROM `startList` WHERE `category`=? && `mezicas7`!=? ");
		$result->execute(array($category, 0));
		$item = $result->fetch();
		if($item['id'] != "" || $item['id'] != 0){
			return 7;
		}
		$result = $db->prepare("SELECT `id` FROM `startList` WHERE `category`=? && `mezicas6`!=? ");
		$result->execute(array($category, 0));
		$item = $result->fetch();
		if($item['id'] != "" || $item['id'] != 0){
			return 6;
		}
		$result = $db->prepare("SELECT `id` FROM `startList` WHERE `category`=? && `mezicas5`!=? ");
		$result->execute(array($category, 0));
		$item = $result->fetch();
		if($item['id'] != "" || $item['id'] != 0){
			return 5;
		}
		$result = $db->prepare("SELECT `id` FROM `startList` WHERE `category`=? && `mezicas4`!=? ");
		$result->execute(array($category, 0));
		$item = $result->fetch();
		if($item['id'] != "" || $item['id'] != 0){
			return 4;
		}
		$result = $db->prepare("SELECT `id` FROM `startList` WHERE `category`=? && `mezicas3`!=? ");
		$result->execute(array($category, 0));
		$item = $result->fetch();
		if($item['id'] != "" || $item['id'] != 0){
			return 3;
		}
		$result = $db->prepare("SELECT `id` FROM `startList` WHERE `category`=? && `mezicas2`!=? ");
		$result->execute(array($category, 0));
		$item = $result->fetch();
		if($item['id'] != "" || $item['id'] != 0){
			return 2;
		}
		$result = $db->prepare("SELECT `id` FROM `startList` WHERE `category`=? && `mezicas1`!=? ");
		$result->execute(array($category, 0));
		$item = $result->fetch();
		if($item['id'] != "" || $item['id'] != 0){
			return 1;
		} else {
			return 0;
		}
	}
	
	public function getWholeStartlist()
	{
	    $db = parent::connect();
	    $result = $db->prepare("SELECT * FROM `startList` ORDER BY `startTimestamp` ASC, `number` ASC");
	    $result->execute(array());
	    $items = $result->fetchAll();
	    
	    return $items;
	}
}