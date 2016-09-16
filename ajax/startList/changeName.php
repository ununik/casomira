<?php
include __DIR__ . '/../../autoload.php';

$result = Connection::connect()->prepare(
		'UPDATE `startovni_listina` SET jmeno = :jmeno WHERE id = :id;'
		);

$result->execute(array(
		':jmeno' => $_POST['jmeno'],
		':id' => $_POST['id']
));