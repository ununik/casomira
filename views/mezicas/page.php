<?php
$container = '<div id="pageWrapper">';
$container .= '<div id="open_close" onclick="hideMenu()">&gt;&gt;</div>';
$container.= '<ul id="startList_navigation">' . $mezicas->getNavigation() . '</ul>';
$container .= $mezicas->getForm();
$container .= '<div id="subpage"></div>';
$container .= '<div id="mezicas_formStartlist">';
$container .= $startlist;
$container .= '</div></div>';
return $container;