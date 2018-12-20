<?php

namespace idk\app\controllers;

use yii\web\Controller;
use yii\helpers\Yii;

class DataViewController extends Controller
{
   
    public function actionIndex()
    {
        $dataProvider = new \yii\data\ArrayDataProvider();
        $dataProvider->allModels = $this->app->params['packages'];
       
        return $this->render('index', [
            'dataProvider' => $dataProvider,
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