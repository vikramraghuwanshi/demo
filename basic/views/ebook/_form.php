<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\ebooks $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="ebooks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'auther')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'book_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'file_location')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'retail_price')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'sale_price')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
