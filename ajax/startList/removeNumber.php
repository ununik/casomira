<?php
include __DIR__ . '/../../autoload.php';

$startovniListina = new StartovniListina();
$startovniListina->removeId($_POST['id']);