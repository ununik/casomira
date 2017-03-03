<?php
class StartList extends Connection
{
	private $navigation = '';

	public function addToNavigation($new)
	{
		$this->navigation .= $new;
	}
	public function getNavigation()
	{
		return $this->navigation;
	}

	public function dateToTimestamp($date)
	{
		$time = explode('.', $date);
		for($i = 0; $i < 3; $i++)
		{
			$time[$i] = trim($time[$i]);
		}

		$timestamp = mktime(0, 0, 0, $time[1], $time[0], $time[2]);
		return $timestamp;
	}

	public function timeAndDateToTimestamp($time, $date)
	{
		$date = explode('.', $date);
		for($i = 0; $i < 3; $i++)
		{
			$date[$i] = trim($date[$i]);
		}

		$time = explode(':', $time);
		for($i = 0; $i < 3; $i++)
		{
			$time[$i] = trim($time[$i]);
		}

		$timestamp = mktime($time[0], $time[1], $time[2], $date[1], $date[0], $date[2]);
		return $timestamp;
	}

	public function saveNewStartNumber($number, $category, $start)
	{
		$result = parent::connect()->prepare("INSERT INTO `startList`(`number`, `category`, `startTimestamp`) VALUES (?, ?, ?)");
		$result->execute(array($number, $category, $start));
	}
	public function checkStartNumber($number)
	{
	    $result = parent::connect()->prepare("SELECT `id` FROM `startList` WHERE `number`=?");
	    $result->execute(array($number));
	    $items = $result->fetch();
	    
	    if (isset($items['id'])) {
	        return false;
	    } else {
	        return true;
	    }
	}

	public function getStartlistAll()
	{
		$db = parent::connect();
		$result = $db->prepare("SELECT * FROM `startList` ORDER BY `startTimestamp` ASC, `number` ASC");
		$result->execute(array());
		$items = $result->fetchAll();

		return $items;
	}

	public function saveName($name, $id)
	{
		$db = parent::connect();
		$result = $db->prepare("UPDATE `startList` SET `name`=? WHERE id=? ");
		$result->execute(array($name, $id));
	}

	public function getShortCategory($id)
	{
		$db = parent::connect();
		$result = $db->prepare("SELECT `short` FROM `category` WHERE id=?");
		$result->execute(array($id));
		$item = $result->fetch();

		return $item['short'];
	}

	public function getAllCategories()
	{
		$db = parent::connect();
		$result = $db->prepare("SELECT * FROM `category`");
		$result->execute(array());
		$item = $result->fetchAll();

		return $item;
	}

	public function TRUNCATEStartList()
	{
		$db = parent::connect();
		$result = $db->prepare("TRUNCATE TABLE  `startList`");
		$result->execute(array());
	}
	public function deleteNumber($id)
	{
	    $db = parent::connect();
	    $result = $db->prepare("DELETE FROM `startList` WHERE `id`=?");
	    $result->execute(array($id));
	}
}