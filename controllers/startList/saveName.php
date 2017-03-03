<?php
include '../../models/config.php';
include '../../models/helpers.php';
function __autoload($name)
{
	include_once "../../models/classes/$name.class.php";
}

$name = $_POST['name'];
$id = $_POST['id'];

$startList = new StartList();
$startList->saveName($name, $id);