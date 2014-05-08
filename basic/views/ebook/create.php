<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\ebooks $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Ebooks',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ebooks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ebooks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
