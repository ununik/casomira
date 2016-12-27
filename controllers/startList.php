<?php
include '../models/config.php';
include '../models/helpers.php';
function __autoload($name)
{
	include_once "../models/classes/$name.class.php";
}
$startList = new StartList();
$startList->addToNavigation('<li onclick="openSubpage(\'startList/addNewStart.php\')">Přidat startovní sekvenci</li>');
$startList->addToNavigation('<li onclick="openSubpage(\'startList/list.php\')">Náhled startovní listiny</li>');
$startList->addToNavigation('<li onclick="openSubpage(\'startList/clearList.php\')">Vyprazdnit startovní listinu</li>');



print(include ('../views/startList/page.php'));