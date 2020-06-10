<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tabla;

/**
 * TablaSearch represents the model behind the search form of `app\models\Tabla`.
 */
class TablaSearch extends Tabla
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idAlumno', 'calf1', 'calf2', 'calf3', 'calf4', 'calf5', 'promedio'], 'integer'],
            [['nombre', 'aPaterno', 'aMaterno'], 'safe'],
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
        $query = Tabla::find();

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
            'idAlumno' => $this->idAlumno,
            'calf1' => $this->calf1,
            'calf2' => $this->calf2,
            'calf3' => $this->calf3,
            'calf4' => $this->calf4,
            'calf5' => $this->calf5,
            'promedio' => $this->promedio,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'aPaterno', $this->aPaterno])
            ->andFilterWhere(['like', 'aMaterno', $this->aMaterno]);

        return $dataProvider;
    }
}
