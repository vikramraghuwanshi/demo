<?php

namespace app\models\derived;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Category as CategoryModel;

/**
 * Category represents the model behind the search form about `app\models\Category`.
 */
class Category extends CategoryModel
{
    public $main_category;
    public function rules()
    {
        return [
            [['id', 'parent_id'], 'integer'],
            [['name', 'created', 'modified'], 'safe'],
        ];
    }

    public function getCategories()
    {
                return $this->hasMany(Category::className(), ['parent_id' => 'id']);
    }
    
    public function getSubcategories()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
//                 $query = CategoryModel::find()->joinWith(['subcategories']);
        $query = CategoryModel::find();
                 
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'created' => $this->created,
            'modified' => $this->modified,
        ]);
        //$query->joinWith(['subcategories']);
        $query->andFilterWhere(['like', 'name', $this->name]);
        //$query->andFilterWhere(['like', 'subcategories.name', $this->main_category]);
        //$query->andFilterWhere(['like', 'subcategories.name', '12']);
        
        return $dataProvider;
    }
}
