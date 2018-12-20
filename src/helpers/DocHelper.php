<?php

namespace idk\app\helpers;

use yii\helpers\Yii;
use yii\exceptions\InvalidConfigException;
use yii\helpers\Html;


class DocHelper
{
    public static function doc($file)
    {
        $path = Yii::getAlias("@doc/$file.md");
        if (!file_exists($path)) {
            throw new InvalidConfigException("Cannot find $file.md");
        }

        $parser = new \cebe\markdown\Markdown();

        return Html::tag('div', $parser->parse(file_get_contents($path)), ['class' => 'md']);
    }
}