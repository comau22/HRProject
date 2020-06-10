<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Docentes;

/**
 * DocentesSearch represents the model behind the search form of `app\models\Docentes`.
 */
class DocentesSearch extends Docentes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Docente', 'dia_nac', 'mes_nac', 'ano_nac', 'num_calle', 'cp', 'id_Materia'], 'integer'],
            [['nombre', 'aPaterno', 'aMaterno', 'sexo', 'rfc', 'status', 'calle', 'colonia'], 'safe'],
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
        $query = Docentes::find();

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
            'id_Docente' => $this->id_Docente,
            'dia_nac' => $this->dia_nac,
            'mes_nac' => $this->mes_nac,
            'ano_nac' => $this->ano_nac,
            'num_calle' => $this->num_calle,
            'cp' => $this->cp,
            'id_Materia' => $this->id_Materia,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'aPaterno', $this->aPaterno])
            ->andFilterWhere(['like', 'aMaterno', $this->aMaterno])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'rfc', $this->rfc])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'calle', $this->calle])
            ->andFilterWhere(['like', 'colonia', $this->colonia]);

        return $dataProvider;
    }
}
