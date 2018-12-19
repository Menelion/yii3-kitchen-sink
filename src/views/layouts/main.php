<?php

use idk\app\assets\AppAsset;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register(
$this
);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $this->title ?: 'Yii 3 Kitchen Sink' ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="<?= Url::to(['site/index']) ?>"><img src="/img/yii.png" width="100%"/></a>
            <?= yii\widgets\Menu::widget([
                'options' => [
                    'class' => 'pure-menu-list'
                ],
                'activeCssClass' => 'pure-menu-selected',
                'linkTemplate' => '<a href="{url}" class="pure-menu-link">{label}</a>',
                'itemOptions' => [
                    'class' => 'pure-menu-item',
                ],
                'items' => [
                    ['label' => 'Home', 'url' => ['site/index']],
                    ['label' => 'Configuration', 'url' => ['site/config']],
                ],
            ]); ?>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1><?= $this->title ?: 'Yii 3 Kitchen Sink' ?></h1>
            <h2><?= $this->subTitle ?></h2>
        </div>

        <div class="content">
        <?= $content ?>
        </div>
         
    </div>
</div>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>