<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\UserType $model
 */

$this->title = Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'User Type',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
