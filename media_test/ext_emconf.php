<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '711 Media test',
    'description' => 'An extension for work test.',
    'category' => 'plugin',
    'author' => 'Olena Khrushch',
    'author_company' => 'Khrushch Inc.',
    'author_email' => 'olenka.khrushch.2601@gmail.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.9.99',
        ]
    ],
//    'autoload' => [
//        'psr-4' => [
//            'MyVendor\\StoreInventory\\' => 'Classes'
//        ]
//    ],
];