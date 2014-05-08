<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\User $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php
            $usertypes = app\models\derived\UserType::find()->all();
         //pr($categories,1);
         //$data1 = ZHtml::listData($userdata, 'id', 'name');
         foreach($usertypes as $usertype){
             $option[$usertype->id] = $usertype->name;
         }
         
    ?>
    <?= $form->field($model, 'user_type_id')->dropDownList($option,['prompt'=>'None']) ?>

    <? // $form->field($model, 'created')->textInput() ?>

    <? //$form->field($model, 'modified')->textInput() ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'gender')->dropDownList(['Male'=>'Male','Female'=>'Female'],['prompt'=>'None']) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
