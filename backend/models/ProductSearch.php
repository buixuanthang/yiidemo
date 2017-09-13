<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/**
 * ProductSearch represents the model behind the search form about `backend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Pro_id', 'Price', 'SaleOf', 'PriceSale', 'Quanlity', 'GroupID', 'Status', 'CateID', 'SuppliresID', 'UserID'], 'integer'],
            [['Pro_name', 'StartSale', 'EndSale', 'Size', 'Color', 'Evaluation', 'Tags', 'Image', 'Keywords', 'Description', 'Content', 'CreatedAt', 'UpdateAt'], 'safe'],
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
        $query = Product::find();

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
            'Pro_id' => $this->Pro_id,
            'Price' => $this->Price,
            'SaleOf' => $this->SaleOf,
            'StartSale' => $this->StartSale,
            'EndSale' => $this->EndSale,
            'PriceSale' => $this->PriceSale,
            'Quanlity' => $this->Quanlity,
            'GroupID' => $this->GroupID,
            'Status' => $this->Status,
            'CateID' => $this->CateID,
            'SuppliresID' => $this->SuppliresID,
            'UserID' => $this->UserID,
            'CreatedAt' => $this->CreatedAt,
            'UpdateAt' => $this->UpdateAt,
        ]);

        $query->andFilterWhere(['like', 'Pro_name', $this->Pro_name])
            ->andFilterWhere(['like', 'Size', $this->Size])
            ->andFilterWhere(['like', 'Color', $this->Color])
            ->andFilterWhere(['like', 'Evaluation', $this->Evaluation])
            ->andFilterWhere(['like', 'Tags', $this->Tags])
            ->andFilterWhere(['like', 'Image', $this->Image])
            ->andFilterWhere(['like', 'Keywords', $this->Keywords])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'Content', $this->Content]);

        return $dataProvider;
    }
}
