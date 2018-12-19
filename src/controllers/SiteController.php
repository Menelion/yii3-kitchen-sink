<?php

namespace idk\app\controllers;

use yii\web\Controller;

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
        echo $a;
        return $this->render('index', [
            'foo' => 'bar',
        ]);
    }

}