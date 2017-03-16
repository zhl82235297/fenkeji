<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Navigation as NavigationModel;

/**
 * Navigation represents the model behind the search form about `backend\models\Navigation`.
 */
class Navigation extends NavigationModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'urltype', 'display', 'navigationorder'], 'integer'],
            [['alias', 'title', 'color', 'pagealias', 'list_id', 'tag', 'url', 'target'], 'safe'],
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
        $query = NavigationModel::find();

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
            'urltype' => $this->urltype,
            'display' => $this->display,
            'navigationorder' => $this->navigationorder,
        ]);

        $query->andFilterWhere(['like', 'alias', $this->alias])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'pagealias', $this->pagealias])
            ->andFilterWhere(['like', 'list_id', $this->list_id])
            ->andFilterWhere(['like', 'tag', $this->tag])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'target', $this->target]);

        return $dataProvider;
    }
}
