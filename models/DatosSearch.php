<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Datos;

/**
 * DatosSearch represents the model behind the search form of `app\models\Datos`.
 */
class DatosSearch extends Datos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'telefono'], 'integer'],
            [['nombre', 'campus', 'departamento'], 'safe'],
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
        $query = Datos::find();

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
            'ID' => $this->ID,
            'telefono' => $this->telefono,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'campus', $this->campus])
            ->andFilterWhere(['like', 'departamento', $this->departamento]);

        return $dataProvider;
    }
}
