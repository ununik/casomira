<?php
$container = '<h1>Startovni listina</h1>';
$container.= '<ul id="startList_navigation">' . $startList->getNavigation() . '</ul>';
$container .= '<div id="subpage"></div>';
return $container;