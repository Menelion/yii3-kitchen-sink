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

    public function actionIntro()
    {
        return $this->render('doc', [
            'document' => '1-Intro',
            'title' => 'What is Yii 3?',
            'subTitle' => 'Why was it made, and how',
        ]);
    }

    public function actionPackages()
    {
        return $this->render('doc', [
            'document' => '3-Packages',
            'title' => 'New composer packages',
            'subTitle' => 'How was Yii 2 was split into several packages',
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