<?php

use Illuminate\Support\Collection;

require '../vendor/autoload.php';

echo "Hello world";

// Switching from boolean to string causes PHPStan to error because $abc expects a bool
$myCollection = Collection::make([true, true, true]);

echo 'Foo';

$abc = function (bool $a): bool {
    if ($a) {
        return false;
    }

    return true;
};

$first = $myCollection->first();

foreach ($myCollection as $item) {
    echo $abc($item);
}

$arr = array('a', 'b', 'c');
