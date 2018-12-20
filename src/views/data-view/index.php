<?php

use idk\app\helpers\DocHelper;

/* @var $this yii\web\View */


$foo = [
    'value' => function ($wtf) {
        var_dump($wtf);die;
    }
]

?>

<?= \yii\dataview\GridView::widget([
    'dataProvider' => $dataProvider,
    'tableOptions' => [
        'class' => 'pure-table',
    ],
    'columns' => [
        'id',
        'data' => [
            'value' => function ($model) {
                return $model['data'][1];
        }],
        
        // ...
    ],
]) ?>