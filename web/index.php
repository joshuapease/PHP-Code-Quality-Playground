<?php

require '../vendor/autoload.php';

echo "Hello world";

$mapped = collect([
    'a',
    'b',
    'c'
])
    ->map(fn(string $x) => $x . '-mapped')
    ->all();

echo 'Foo';

$arr = array('a', 'b', 'c');

print_r($mapped);