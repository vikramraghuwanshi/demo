<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Category $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="category-form">
    <?php $option = array();
   /* $categories2 = app\models\derived\Category::find()->with('categories')->filterWhere(['parent_id' => '0'])->all();
    foreach($categories2 as $vals){
         pr($vals->attributes);
        foreach($vals->categories as $val){
            pr($val->attributes);
        }
        
    }*/
    //pr($categories2->categories);
          $categories = app\models\derived\Category::find()->filterWhere(['parent_id' => '0'])->all();
         //pr($categories,1);
         //$data1 = ZHtml::listData($userdata, 'id', 'name');
         foreach($categories as $category){
             $option[$category->id] = $category->name;
         }
         ///pr($userdata);

    ?>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parent_id')->dropDownList($option,['prompt'=>'None']) ?>

    <? // $form->field($model, 'created')->textInput() ?>

    <? // $form->field($model, 'modified')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
