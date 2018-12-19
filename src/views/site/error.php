<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */
use yii\helpers\Html;
$this->title = $name;

?>

<div class="exception">
    <?= nl2br(Html::encode($exception->getMessage())) ?>
</div>