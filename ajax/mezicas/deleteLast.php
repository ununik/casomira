<?php
include __DIR__ . '/../../autoload.php';

$mezicas = new Mezicas;
$mezicas->removeId($_POST['id']);