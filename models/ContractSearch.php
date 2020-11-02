<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contract;

/**
 * ContractSearch represents the model behind the search form of `app\models\Contract`.
 */
class ContractSearch extends Contract
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'branch', 'lawyer', 'status', 'creator'], 'integer'],
            [['counterparty', 'subject', 'start_date', 'milestone1', 'date1', 'milestone2', 'date2', 'milestone3', 'date3', 'milestone4', 'date4', 'milestone5', 'date5', 'milestone6', 'date6', 'milestone7', 'date7', 'milestone8', 'date8', 'milestone9', 'date9', 'milestone10', 'date10', 'milestone11', 'date11', 'milestone12', 'date12', 'milestone13', 'date13', 'milestone14', 'date14', 'milestone15', 'date15', 'milestone16', 'date16', 'milestone17', 'date17', 'milestone18', 'date18', 'milestone19', 'date19', 'milestone20', 'date20', 'milestone21', 'date21', 'milestone22', 'date22', 'milestone23', 'date23', 'milestone24', 'date24', 'milestone25', 'date25', 'milestone26', 'date26', 'milestone27', 'date27', 'milestone28', 'date28', 'milestone29', 'date29', 'milestone30', 'date30', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Contract::find();

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
            'branch' => $this->branch,
            'lawyer' => $this->lawyer,
            'status' => $this->status,
            'start_date' => $this->start_date,
            'date1' => $this->date1,
            'date2' => $this->date2,
            'date3' => $this->date3,
            'date4' => $this->date4,
            'date5' => $this->date5,
            'date6' => $this->date6,
            'date7' => $this->date7,
            'date8' => $this->date8,
            'date9' => $this->date9,
            'date10' => $this->date10,
            'date11' => $this->date11,
            'date12' => $this->date12,
            'date13' => $this->date13,
            'date14' => $this->date14,
            'date15' => $this->date15,
            'date16' => $this->date16,
            'date17' => $this->date17,
            'date18' => $this->date18,
            'date19' => $this->date19,
            'date20' => $this->date20,
            'date21' => $this->date21,
            'date22' => $this->date22,
            'date23' => $this->date23,
            'date24' => $this->date24,
            'date25' => $this->date25,
            'date26' => $this->date26,
            'date27' => $this->date27,
            'date28' => $this->date28,
            'date29' => $this->date29,
            'date30' => $this->date30,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'creator' => $this->creator,
        ]);

        $query->andFilterWhere(['like', 'counterparty', $this->counterparty])
            ->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'milestone1', $this->milestone1])
            ->andFilterWhere(['like', 'milestone2', $this->milestone2])
            ->andFilterWhere(['like', 'milestone3', $this->milestone3])
            ->andFilterWhere(['like', 'milestone4', $this->milestone4])
            ->andFilterWhere(['like', 'milestone5', $this->milestone5])
            ->andFilterWhere(['like', 'milestone6', $this->milestone6])
            ->andFilterWhere(['like', 'milestone7', $this->milestone7])
            ->andFilterWhere(['like', 'milestone8', $this->milestone8])
            ->andFilterWhere(['like', 'milestone9', $this->milestone9])
            ->andFilterWhere(['like', 'milestone10', $this->milestone10])
            ->andFilterWhere(['like', 'milestone11', $this->milestone11])
            ->andFilterWhere(['like', 'milestone12', $this->milestone12])
            ->andFilterWhere(['like', 'milestone13', $this->milestone13])
            ->andFilterWhere(['like', 'milestone14', $this->milestone14])
            ->andFilterWhere(['like', 'milestone15', $this->milestone15])
            ->andFilterWhere(['like', 'milestone16', $this->milestone16])
            ->andFilterWhere(['like', 'milestone17', $this->milestone17])
            ->andFilterWhere(['like', 'milestone18', $this->milestone18])
            ->andFilterWhere(['like', 'milestone19', $this->milestone19])
            ->andFilterWhere(['like', 'milestone20', $this->milestone20])
            ->andFilterWhere(['like', 'milestone21', $this->milestone21])
            ->andFilterWhere(['like', 'milestone22', $this->milestone22])
            ->andFilterWhere(['like', 'milestone23', $this->milestone23])
            ->andFilterWhere(['like', 'milestone24', $this->milestone24])
            ->andFilterWhere(['like', 'milestone25', $this->milestone25])
            ->andFilterWhere(['like', 'milestone26', $this->milestone26])
            ->andFilterWhere(['like', 'milestone27', $this->milestone27])
            ->andFilterWhere(['like', 'milestone28', $this->milestone28])
            ->andFilterWhere(['like', 'milestone29', $this->milestone29])
            ->andFilterWhere(['like', 'milestone30', $this->milestone30]);

        return $dataProvider;
    }
}
