<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ebooks".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $auther
 * @property string $book_name
 * @property string $file_location
 * @property string $retail_price
 * @property string $sale_price
 */
class ebooks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ebooks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id'], 'integer'],
            [['auther', 'book_name', 'file_location'], 'string', 'max' => 255],
            [['retail_price', 'sale_price'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Category ID'),
            'auther' => Yii::t('app', 'Auther'),
            'book_name' => Yii::t('app', 'Book Name'),
            'file_location' => Yii::t('app', 'File Location'),
            'retail_price' => Yii::t('app', 'Retail Price'),
            'sale_price' => Yii::t('app', 'Sale Price'),
        ];
    }
}
