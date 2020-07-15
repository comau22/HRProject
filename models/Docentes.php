<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "docentes".
 *
 * @property int $id_Docente
 * @property string $nombre
 * @property string $aPaterno
 * @property string $aMaterno
 * @property int $dia_nac
 * @property int $mes_nac
 * @property int $ano_nac
 * @property string $sexo
 * @property string $rfc
 * @property string $status
 * @property string $calle
 * @property int $num_calle
 * @property string $colonia
 * @property int $cp
 * @property int $id_Materia
 *
 * @property Asignatura[] $asignaturas
 */
class Docentes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'docentes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'aPaterno', 'aMaterno', 'dia_nac', 'mes_nac', 'ano_nac', 'sexo', 'rfc', 'status', 'calle', 'num_calle', 'colonia', 'cp', 'id_Materia'], 'required'],
            [['dia_nac', 'mes_nac', 'ano_nac', 'num_calle', 'cp', 'id_Materia'], 'integer'],
            [['nombre', 'sexo', 'status'], 'string', 'max' => 10],
            [['aPaterno', 'aMaterno', 'rfc'], 'string', 'max' => 15],
            [['calle', 'colonia'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Docente' => 'Id Docente',
            'nombre' => 'Nombre',
            'aPaterno' => 'A Paterno',
            'aMaterno' => 'A Materno',
            'dia_nac' => 'Dia Nac',
            'mes_nac' => 'Mes Nac',
            'ano_nac' => 'Ano Nac',
            'sexo' => 'Sexo',
            'rfc' => 'Rfc',
            'status' => 'Status',
            'calle' => 'Calle',
            'num_calle' => 'Num Calle',
            'colonia' => 'Colonia',
            'cp' => 'Cp',
            'id_Materia' => 'Id Materia',
        ];
    }

    /**
     * Gets query for [[Asignaturas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsignaturas()
    {
        return $this->hasMany(Asignatura::className(), ['id_Docente' => 'id_Docente']);
    }
}
