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
            'auther',
            'book_name',
            'file_location',
            // 'retail_price',
            // 'sale_price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
