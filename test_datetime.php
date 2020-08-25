<?php

use Opis\Closure\SerializableClosure;

require_once './vendor/autoload.php';

error_reporting(-1);

$dateTime = new DateTime('-1 day');

echo unserialize(serialize($dateTime))->format('c') . "\r\n";

$sc = new SerializableClosure(function () use ($dateTime) {
    echo $dateTime->format('c');
});

$serialized = serialize($sc);
$closure = unserialize($serialized);

$closure();
