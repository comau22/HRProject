<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property int $idPersona
 * @property string $nombre
 * @property string $aPaterno
 * @property string $aMaterno
 * @property int $dia_nac
 * @property int $mes_nac
 * @property int $ano_nac
 * @property string $sexo
 * @property string $rfc
 * @property string $status
 * @property int $idDepartamento
 *
 * @property Departamentos $idDepartamento0
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'aPaterno', 'aMaterno', 'dia_nac', 'mes_nac', 'ano_nac', 'sexo', 'rfc', 'status', 'idDepartamento'], 'required'],
            [['dia_nac', 'mes_nac', 'ano_nac', 'idDepartamento'], 'integer'],
            [['nombre', 'aPaterno', 'aMaterno'], 'string', 'max' => 100],
            [['sexo'], 'string', 'max' => 10],
            [['rfc'], 'string', 'max' => 13],
            [['status'], 'string', 'max' => 20],
            [['idDepartamento'], 'exist', 'skipOnError' => true, 'targetClass' => Departamentos::className(), 'targetAttribute' => ['idDepartamento' => 'idDepartamento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPersona' => 'Id Persona',
            'nombre' => 'Nombre',
            'aPaterno' => 'A Paterno',
            'aMaterno' => 'A Materno',
            'dia_nac' => 'Dia Nac',
            'mes_nac' => 'Mes Nac',
            'ano_nac' => 'Ano Nac',
            'sexo' => 'Sexo',
            'rfc' => 'Rfc',
            'status' => 'Status',
            'idDepartamento' => 'Id Departamento',
        ];
    }

    /**
     * Gets query for [[IdDepartamento0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdDepartamento0()
    {
        return $this->hasOne(Departamentos::className(), ['idDepartamento' => 'idDepartamento']);
    }
}
