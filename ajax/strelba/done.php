<?php
include __DIR__ . '/../../autoload.php';
$strelba = new Strelba();
$actual = $strelba->existCisloStrelby($_POST['id'], $_POST['cisloStrelby']);
if ($actual === false) {
    $strelba->addStrelba($_POST['id'], $_POST['cisloStrelby'], $_POST['a'], 
            $_POST['b'], $_POST['c'], $_POST['d'], $_POST['e']);
} else {
    $strelba->updateStrelba($actual, $_POST['a'], $_POST['b'], $_POST['c'], 
            $_POST['d'], $_POST['e']);
}