<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AsignaturaAlumno;

/**
 * AsignaturaAlumnoSearch represents the model behind the search form of `app\models\AsignaturaAlumno`.
 */
class AsignaturaAlumnoSearch extends AsignaturaAlumno
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_asignatura_alumno', 'id_asignatura', 'id_alumno'], 'integer'],
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
        $query = AsignaturaAlumno::find();

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
            'id_asignatura_alumno' => $this->id_asignatura_alumno,
            'id_asignatura' => $this->id_asignatura,
            'id_alumno' => $this->id_alumno,
        ]);

        return $dataProvider;
    }
}
