<?php

return [
    'app' => [
        'controllerNamespace' => idk\app\controllers::class,
        'aliases' => [
            '@webroot' => __DIR__ . '/../public',
        ],
    ],
    'assetManager' => [
        'appendTimestamp' => true,
    ],
];