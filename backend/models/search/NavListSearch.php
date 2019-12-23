<?php



namespace backend\models\search;



use common\models\NavList;

use Yii;

use yii\base\Model;

use yii\data\ActiveDataProvider;

use backend\models\Ad;



/**

 * AdSearch represents the model behind the search form about `backend\models\Ad`.

 */

class NavListSearch extends NavList

{

    /**

     * @inheritdoc

     */

    public function rules()

    {

        return [

            [['id', 'sort'], 'integer'],

            [['name', 'url'], 'safe'],

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

        $query = NavList::find();



        $dataProvider = new ActiveDataProvider([

            'query' => $query,

            'pagination' => [

                'pageSize' => 10,

            ],

        ]);



        $this->load($params);



        if (!$this->validate()) {

            // uncomment the following line if you do not want to return any records when validation fails

            // $query->where('0=1');

            return $dataProvider;

        }



        $query->andFilterWhere([

            'id' => $this->id,

            'name' => $this->name,

            'sort' => $this->sort,

            'url' => $this->url,

        ]);



        $query->andFilterWhere(['like', 'name', $this->name])

            ->andFilterWhere(['like', 'sort', $this->sort])

            ->andFilterWhere(['like', 'url', $this->url]);



        /* 排序 */

        $query->orderBy([

            'sort' => SORT_ASC,

        ]);



        return $dataProvider;

    }

}

