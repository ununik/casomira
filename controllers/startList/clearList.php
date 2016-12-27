<?php
include '../../models/config.php';
include '../../models/helpers.php';
function __autoload($name)
{
	include_once "../../models/classes/$name.class.php";
}

$startList = new StartList();
$startList->TRUNCATEStartList();

echo 'Startovní listna je prázdná';