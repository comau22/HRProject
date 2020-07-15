<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alumnos;

/**
 * AlumnosSearch represents the model behind the search form of `app\models\Alumnos`.
 */
class AlumnosSearch extends Alumnos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idAlumno', 'dia_nac', 'mes_nac', 'ano_nac', 'id_grupo'], 'integer'],
            [['nombre', 'aPaterno', 'aMaterno', 'sexo', 'rfc', 'status'], 'safe'],
            [['promedio'], 'number'],
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
        $query = Alumnos::find();

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
            'dia_nac' => $this->dia_nac,
            'mes_nac' => $this->mes_nac,
            'ano_nac' => $this->ano_nac,
            'promedio' => $this->promedio,
            'id_grupo' => $this->id_grupo,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'aPaterno', $this->aPaterno])
            ->andFilterWhere(['like', 'aMaterno', $this->aMaterno])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'rfc', $this->rfc])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
