<?php
include '../../models/config.php';
include '../../models/helpers.php';
function __autoload($name)
{
	include_once "../../models/classes/$name.class.php";
}

if (($_POST['firstNumber']=="" && $_POST['lastNumber']=="") ) {
    echo 'Nebylo zadané žádné startovní číslo.';
    return;
}

$startList = new StartList();
$err = array();

$date = $startList->dateToTimestamp($_POST['date']);
if($date == 0){
    echo 'Špatný formát datumu.';
    return;
}

$category = $_POST['category'];

$firstNumber = intval ($_POST['firstNumber']);
$lastNumber = intval ($_POST['lastNumber']);

if($firstNumber > $lastNumber && ($lastNumber != '' || $lastNumber != 0)){
	$help = $firstNumber;
	$firstNumber = $lastNumber;
	$lastNumber = $help;
}
if($firstNumber == 0 || $firstNumber == ''){
    $firstNumber = 1;
}
if($lastNumber == 0 || $lastNumber == ''){
	$lastNumber = $firstNumber;
}

$sequence = intval ( $_POST['sequence']);

$first = $firstNumber;
$last = $lastNumber;

$firstStartTime = $startList->timeAndDateToTimestamp($_POST['timeFirst'], $_POST['date']);
if($firstStartTime == 0){
    echo 'Špatný formát startovního času.';
    return;
}

$badNumber = array();

for($firstNumber; $firstNumber <= $lastNumber; $firstNumber++)
{
    if (!$startList->checkStartNumber($firstNumber)) {
        $badNumber[] = $firstNumber;
        $firstStartTime = $firstStartTime + $sequence;
        continue;
    }
	$startList->saveNewStartNumber($firstNumber, $category, $firstStartTime);
	//Start for next number
	$firstStartTime = $firstStartTime + $sequence;
}

if (count($badNumber) > 0) {
    echo 'Následující čísla už jsou ve startovní listině: ';
    echo (implode (", ", $badNumber));
    return;
}

echo 'Do startovní listiny byla přidána čísla '.$first.' - '.$last.'.';