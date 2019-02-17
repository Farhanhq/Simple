<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\branches;

/**
 * BranchesSearch represents the model behind the search form of `backend\models\branches`.
 */
class BranchesSearch extends branches
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['branch_id', 'companies_company_id', 'branch_name', 'branch_address', 'branch_created_date', 'branch_status'], 'integer'],
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
        $query = branches::find();

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
            'branch_id' => $this->branch_id,
            'companies_company_id' => $this->companies_company_id,
            'branch_name' => $this->branch_name,
            'branch_address' => $this->branch_address,
            'branch_created_date' => $this->branch_created_date,
            'branch_status' => $this->branch_status,
        ]);

        return $dataProvider;
    }
}
