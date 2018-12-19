<?php

namespace idk\app\controllers;

use yii\web\Controller;
use yii\helpers\Yii;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                '__class' => \yii\web\ErrorAction::class,
            ],
        ];
    }
    
    public function actionIndex()
    {
        return $this->render('index', [
            'foo' => 'bar',
        ]);
    }

    public function actionConfig()
    {
        $pluginOutputPath = Yii::getAlias('@vendor/hiqdev/composer-config-plugin-output');
        $configs = [];
        foreach (glob($pluginOutputPath . '/*.php') as $file) {
            if (strrpos($file, '__rebuild.php')) continue;
            $configs[basename($file)] = require($file);
        }

        return $this->render('config', [
            'configs' => $configs,
        ]);
    }

}