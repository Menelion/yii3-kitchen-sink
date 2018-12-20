<?php

namespace idk\app\helpers;

use yii\helpers\Yii;
use yii\exceptions\InvalidConfigException;


class DocHelper
{
    public static function doc($file)
    {
        $path = Yii::getAlias("@doc/$file.md");
        if (!file_exists($path)) {
            throw new InvalidConfigException("Cannot find $file.md");
        }

        $parser = new \cebe\markdown\Markdown();

        return $parser->parse(file_get_contents($path));
    }
}