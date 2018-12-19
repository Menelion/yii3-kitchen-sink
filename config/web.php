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
    'view' => [
        '__class' => idk\app\components\View::class,
    ]
];