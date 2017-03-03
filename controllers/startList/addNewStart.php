<?php
include '../../models/config.php';
include '../../models/helpers.php';
function __autoload($name)
{
	include_once "../../models/classes/$name.class.php";
}
$startList = new StartList();
$date = date('j. n. Y');
$optionCategories = '';
foreach ($startList->getAllCategories() as $category)
{
	$optionCategories .= '<option value="' . $category['id'] . '">' . $category['long'] . '</option>';
}

print(include ('../../views/startList/addNewStart.php'));