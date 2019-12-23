<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Images;

/**
 * ImagesSearch represents the model behind the search form about `common\models\Images`.
 */
class ImagesSearch extends Images
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'category_id2', 'sort', 'create_time', 'update_time', 'status', 'click'], 'integer'],
            [['name', 'title', 'cover', 'description', 'content', 'images', 'extend', 'tags', 'keywords', 'np','bianhao'], 'safe'],
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
        $query = Images::find();

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
            'category_id' => $this->category_id,
            'category_id2' => $this->category_id2,
            'sort' => $this->sort,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'status' => $this->status,
            'click' => $this->click,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'cover', $this->cover])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'images', $this->images])
            ->andFilterWhere(['like', 'extend', $this->extend])
            ->andFilterWhere(['like', 'tags', $this->tags])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'np', $this->np])
            ->andFilterWhere(['like', 'bianhao', $this->bianhao]);
        return $dataProvider;
    }
}
