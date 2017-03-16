<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Test as TestModel;

/**
 * Test represents the model behind the search form about `backend\models\Test`.
 */
class Test extends TestModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'describle', 'from', 'to', 'brand', 'teamtime', 'recom_key'], 'safe'],
            [['price'], 'number'],
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
        $query = TestModel::find();

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
            'price' => $this->price,
            'teamtime' => $this->teamtime,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'describle', $this->describle])
            ->andFilterWhere(['like', 'from', $this->from])
            ->andFilterWhere(['like', 'to', $this->to])
            ->andFilterWhere(['like', 'brand', $this->brand])
            ->andFilterWhere(['like', 'recom_key', $this->recom_key])
            ->orderBy('recom_key desc');

        return $dataProvider;
    }
}
