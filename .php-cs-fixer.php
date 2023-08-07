<?php

$finder = PhpCsFixer\Finder::create()->in(__DIR__ . DIRECTORY_SEPARATOR . 'web');

$config = new PhpCsFixer\Config();

return $config
    ->setRules([
        '@PSR12' => true,
        'trailing_comma_in_multiline' => [
            'elements' => ['arrays'],
        ],
//        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder);
