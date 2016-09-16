<?php
include __DIR__ . '/../../autoload.php';

$result = Connection::connect()->prepare(
		'UPDATE `kategorie` SET short = :short WHERE id = :id;'
		);

$result->execute(array(
		':short' => $_POST['nazev'],
		':id' => $_POST['id']
));