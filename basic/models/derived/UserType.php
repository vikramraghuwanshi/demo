<?php

namespace app\models\derived;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserType as UserTypeModel;

/**
 * UserType represents the model behind the search form about `app\models\UserType`.
 */
class UserType extends UserTypeModel
{
    public function rules()
    {
        return [
            [['name', 'extra'], 'required'],
            [['name', 'extra'], 'unique'],
            [['id', 'is_active'], 'integer'],
            [['name', 'extra'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = UserTypeModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'extra', $this->extra]);

        return $dataProvider;
    }
}
