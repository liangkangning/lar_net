<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Keywords;

/**
 * KeywordsSearch represents the model behind the search form about `common\models\Keywords`.
 */
class KeywordsSearch extends Keywords
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'num'], 'integer'],
            [['keyword', 'name', 'keywords', 'longword1', 'longword2', 'longword3', 'title', 'seocontent', 'image', 'adtext', 'description', 'attr_value_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Keywords::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'num' => $this->num,
        ]);

        $query->andFilterWhere(['like', 'keyword', $this->keyword])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'longword1', $this->longword1])
            ->andFilterWhere(['like', 'longword2', $this->longword2])
            ->andFilterWhere(['like', 'longword3', $this->longword3])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'seocontent', $this->seocontent])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'adtext', $this->adtext])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'attr_value_id', $this->attr_value_id]);

        return $dataProvider;
    }
}
