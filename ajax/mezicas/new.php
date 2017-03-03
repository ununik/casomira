<?php
include __DIR__ . '/../../autoload.php';

$startovniListina = new StartovniListina();

$timestamp = $_POST['timestamp'];
$timestamp = round($timestamp / 1000);

$id = $_POST['id'];
$athlete = $startovniListina->getStartListRow($id);
$tracktime = $timestamp - $athlete['casStartu'];

$mezicas = new Mezicas();
$last = $mezicas->getLastMezicasForAthlete($athlete['id']);
$mezicas->addNewMezicas($id, $timestamp, $tracktime, $last + 1);

$vysledky = new Vysledky();

echo $vysledky->getResultForCategory($athlete['kategorie'], $last + 1, 
        $athlete['id']);