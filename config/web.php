<?php

return [
    'app' => [
        'controllerNamespace' => idk\app\controllers::class,
        'aliases' => [
            '@webroot' => __DIR__ . '/../public',
            '@doc' => __DIR__ . '/../docs',
        ],
    ],
    'assetManager' => [
        'appendTimestamp' => true,
    ],
    'view' => [
        '__class' => idk\app\components\View::class,
    ],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
    ],
];