<?php

$pdo = new PDO(
        'informix:host=127.0.0.1;service=9088;database=test;server=dev;protocol=onsoctcp;CLIENT_LOCALE=en_US.utf8;DB_LOCALE=en_US.8859-1;EnableScrollableCursors=1'
        , 'test'
        , 'test'
);

$stmt = $pdo->prepare('select tabname from systables');

$stmt->execute();

while ($row = $stmt->fetch()) {
    print_r($row);
}