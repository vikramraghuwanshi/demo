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
     <?php $options = array();
    $categories2 = app\models\derived\Category::find()->with('categories')->filterWhere(['parent_id' => '0'])->all();
    foreach($categories2 as $categories){
         $options[$categories->id] = $categories->name;
        foreach($categories->categories as $category){
            $options[$category->id] = '  --- '.$category->name;
        }
        
    } ?>
    <?php //$form = ActiveForm::begin(); ?>
    <?php $form = ActiveForm::begin([
                //'type' => ActiveForm::TYPE_HORIZONTAL,
                'options' => ['enctype'=>'multipart/form-data']
            ]); ?>

    <?php // $form->field($model, 'category_id')->textInput() ?>
    <?= $form->field($model, 'category_id')->dropDownList($options,['prompt'=>'None']) ?>
    <?= $form->field($model, 'auther')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'book_name')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'cover_pages')->FileInput() ?>
    <?= $form->field($model, 'file_location')->FileInput() ?>

    <?= $form->field($model, 'retail_price')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'sale_price')->textInput(['maxlength' => 50]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
