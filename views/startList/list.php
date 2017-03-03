<?php
$container = '<table id="start_list_table">
		<tr><th></th><th>Číslo</th><th>Jméno</th><th>Čas startu</th><th>Kategorie</th></tr>';
$i = true;
foreach ($startList->getStartlistAll() as $list)
{
    if ($i) {
        $container .= '<tr class="lichy">';
        $i = false;
    } else {
        $container .= '<tr class="sudy">';
        $i = true;
    }
    $container .= "<td class='table_odstranit' onclick='odstranitZeStartovniListiny(\"{$list['id']}\")'>x</td>";
	$container .= "<td class='table_number'>{$list['number']}</td><td>";
	if($list['name'] == ""){
		$container .= "<span onclick='addName(this, \"{$list['id']}\")'>+</span>";
	} else {
		$container .= $list['name'];
	}
	$container .= "</td><td class='table_cas'>";
	$container .= date('h:i:s', $list['startTimestamp']);
	$container .= "</td><td class='table_category'>";
	$container .= $startList->getShortCategory($list['category']);
	$container .= "</td><td></tr>";
}
$container .= "</table>";

return $container;