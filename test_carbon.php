<?php

use Carbon\Carbon;
use Opis\Closure\SerializableClosure;

require_once './vendor/autoload.php';

error_reporting(-1);

$carbon = new Carbon('-1 day');

echo unserialize(serialize($carbon))->format('c') . "\r\n";

$sc = new SerializableClosure(
    function () use ($carbon) {
        echo $carbon->format('c') . "\r\n";
    }
);

$serialized = serialize($sc);
$closure = unserialize($serialized);

$closure();
