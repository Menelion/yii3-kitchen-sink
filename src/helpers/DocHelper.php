<?php

namespace idk\app\helpers;

use yii\helpers\Yii;
use yii\exceptions\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Url;

class DocHelper
{
    private static $redirections = [
        '2-Configuration' => ['site/config'],
        '3-Packages' => ['site/packages'],
    ];

    public static function doc($file)
    {
        $path = Yii::getAlias("@doc/$file.md");
        if (!file_exists($path)) {
            throw new InvalidConfigException("Cannot find $file.md");
        }

        return self::renderFile($path);
    }

    public static function readme()
    {
        return self::renderFile(Yii::getAlias("@doc/../README.md"));
    }

    private static function renderFile($path)
    {
        $parser = new \cebe\markdown\Markdown();
        $html = $parser->parse(file_get_contents($path));
        $html = preg_replace_callback('!<a href="([^"]+).md"!', function($match) {
             return isset(self::$redirections[$match[1]]) ? '<a href="' . Url::to(self::$redirections[$match[1]]) . '"' : $match[0];
        }, $html);
        return Html::tag('div', $html, ['class' => 'md']);
    }
}
