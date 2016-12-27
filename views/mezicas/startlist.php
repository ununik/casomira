<?php
$container = 'Startovní listina';
$container .= '<table>';

foreach($mezicas->getWholeStartlist() as $athlete) {
    $container .= "<tr><td onclick='prubehStartlist(\"{$athlete['number']}\")'>[|]</td><td onclick='pripravitStartlist(\"{$athlete['number']}\")'>{$athlete['number']}</td><td>{$athlete['name']}</td></tr>";
}
$container .= '</table>';    

return $container;