<?php

namespace idk\app\assets;

use yii\web\AssetBundle;


class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
   
    public $css = [
        'css/site.less'
    ];
}