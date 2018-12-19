<?php
/* @var $this yii\web\View */
/* @var $configs [] */

$this->title = 'Generated configuration';
$this->subTitle = 'Using hiqdev/composer-config-plugin';

$files = array_keys($configs);

?>


<div class="pc-tab">
<?php foreach ($files as $id => $file): ?>
<input <?= $id === 0 ? ' checked="checked"' : '' ?> id="tab<?= $id ?>" type="radio" name="pct" />
<?php endforeach ?>
  <nav>
    <ul>
      <?php foreach ($files as $id => $file): ?>
      <li class="tab<?= $id ?>">
        <label for="tab<?= $id ?>"><?= $file ?></label>
      </li>
      <?php endforeach ?>
    </ul>
  </nav>
  <section>
    <?php foreach ($files as $id => $file): ?>
    <div class="tab<?= $id ?>">
      <h4>@vendor/hiqdev/composer-config-plugin-output/<?= $file ?></h4>
      <?php dump($configs[$file]) ?>
    </div>
    <?php endforeach ?>
  </section>
</div>


   
    
