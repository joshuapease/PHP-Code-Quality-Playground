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

print_r($mapped);