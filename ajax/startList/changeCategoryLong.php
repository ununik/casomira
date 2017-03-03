<?php
include __DIR__ . '/../../autoload.php';

$result = Connection::connect()->prepare(
        'UPDATE `kategorie` SET `long`=:long WHERE id = :id;');

$result->execute(array(
    ':long' => $_POST['nazev'],
    ':id' => $_POST['id']
));

echo '1';