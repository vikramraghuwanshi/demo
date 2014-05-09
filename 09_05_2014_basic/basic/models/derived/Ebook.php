<?php

namespace app\models\derived;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ebooks;

/**
 * Ebook represents the model behind the search form about `app\models\ebooks`.
 */
class Ebook extends ebooks
{
    public $category_name;
    public function rules()
    {
        return [
            [['id', 'category_id'], 'integer'],
            [['auther', 'book_name', 'file_location', 'retail_price', 'sale_price','category_name'], 'safe'],
        ];
    }
    
    
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = ebooks::find()->joinWith('category');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
           /* 'sort'=>[
                'attributes'=>[
                    'category_name'=>[
                        'asc' => ['category.name' => SORT_ASC],
                        'desc' => ['category.name' => SORT_DESC],
                    ]
                ]
            ]*/
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['like', 'auther', $this->auther])
            ->andFilterWhere(['like', 'book_name', $this->book_name])
            ->andFilterWhere(['like', 'file_location', $this->file_location])
            ->andFilterWhere(['like', 'retail_price', $this->retail_price])
            ->andFilterWhere(['like', 'sale_price', $this->sale_price]);
        
            //$query->andWhere(['like', 'category.name', $this->category_name]);

        return $dataProvider;
    }
}
