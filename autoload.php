<?php
function __autoload($name) {
	include __DIR__.'/Models/'.$name.'.class.php';
}

include __DIR__.'/configuration.php';