<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\derived\Ebook $searchModel
 */

$this->title = Yii::t('app', 'Ebooks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ebooks-index">
<?php //echo Yii::getAlias('@web');?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
  'modelClass' => 'Ebooks',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            /*[
                'attribute' => 'category_name',
                'label' => 'Category Name',
                //'class' => 'yii\grid\DataColumn', // can be omitted, default
                'value' => function ($data) {
                    return $data->category->name;
                },
            ],*/
            
            [
                'attribute' => 'name',
                'label' => 'Cover Page',
                'format' => 'html',
                //'class' => 'yii\grid\DataColumn', // can be omitted, default
                'value' => function ($data) {
                    return '<img src="'.Yii::getAlias('@web').'/cover_pages/'.$data->file_location.'" width="70" height="70" />';
                },
            ],
            /*[
                'attribute' => 'name',
                'label' => 'Employee Type',
                'value' => function($model, $index, $dataColumn) {
                        return '<img src="'.Yii::getAlias('@web').'/cover_pages/'.$model->file_location.'" />';
                    },
                'type'=>'raw'
            ],*/
            
            'auther',
            'book_name',
            //'file_location',
             'retail_price',
             'sale_price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
