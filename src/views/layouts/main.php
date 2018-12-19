<?php

use idk\app\assets\AppAsset;
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
            <a class="pure-menu-heading" href="#">Company</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">About</a></li>
                <li class="pure-menu-item menu-item-divided pure-menu-selected">
                    <a href="#" class="pure-menu-link">Services</a>
                </li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Contact</a></li>
            </ul>
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