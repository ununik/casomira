<?php
include '../../models/config.php';
include '../../models/helpers.php';
function __autoload($name)
{
	include_once "../../models/classes/$name.class.php";
}
$err = array();
$mezicas = new Mezicas();
if(!isset($_POST['mezicas'])){
	$mezicasCislo = 1;
	$field = 'mezicas1';
} else {
	$mezicasCislo = $_POST['mezicas'];
	$field = 'mezicas' . $_POST['mezicas'];
}


$allCategoryCompetitors = $mezicas->getAllCompetitorsFromCategory($_POST['category'], $field);
$countOfMezicas = $mezicas->getCountOfMezicas($_POST['category']);

$competitors = array();
foreach ($allCategoryCompetitors as $categoryCompetitor)
{
	if($categoryCompetitor[$field] == 0){
		$categoryCompetitor[$field] = $categoryCompetitor['startTimestamp'];
	}
	$resultTime = $categoryCompetitor[$field] - $categoryCompetitor['startTimestamp'];

	$competitors[$categoryCompetitor['id']] = $resultTime;
}
asort($competitors);


$table = array();
$i = 1;
$firstTime = 0;
foreach ($competitors as $id => $resultTime)
{
	if($resultTime != 0)
	{
		$athlete = $mezicas->getCompetitor($id);
		$time = $athlete[$field] - $athlete['startTimestamp'];
		$timeInRightForm = date('H:i:s', $time);
		if($firstTime == 0){
			$firstTime = $time;
		}

		$loss = date('i:s', $time - $firstTime);

			$table[] = "<tr><td>$i</td><td>{$athlete['number']}</td><td>{$athlete['name']}</td><td class='cas'>+$loss</td><td class='cas'>$timeInRightForm</td></tr>";

		$i++;
	}
}

echo '<div class="mezicasNumberAll">';
for ($i=1; $i<=$countOfMezicas; $i++){
	echo "<span class='mezicasNumber' onclick='showResultsCategoryAndMezicas(\"{$_POST['category']}\", \"$i\")'>$i</span>";
}
echo '</div>';


echo "<h3>Mezičas číslo - $mezicasCislo</h3>";
echo '<table id="mezicasy_tabulka">';
echo '<tr><th class="poradi">pořadí</th><th class="stCislo">st. čislo</th><th class="jmeno">jméno</th><th>ztráta</th><th>čas</th></tr>';
foreach ($table as $table)
{
	echo $table;
}
echo '</table>';