<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tabla".
 *
 * @property int $idAlumno
 * @property string $nombre
 * @property string $aPaterno
 * @property string $aMaterno
 * @property int $calf1
 * @property int $calf2
 * @property int $calf3
 * @property int $calf4
 * @property int $calf5
 * @property int $promedio
 */
class Tabla extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tabla';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'aPaterno', 'aMaterno', 'calf1', 'calf2', 'calf3', 'calf4', 'calf5', 'promedio'], 'required'],
            [['calf1', 'calf2', 'calf3', 'calf4', 'calf5', 'promedio'], 'integer'],
            [['nombre', 'aPaterno', 'aMaterno'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idAlumno' => 'Id Alumno',
            'nombre' => 'Nombre',
            'aPaterno' => 'A Paterno',
            'aMaterno' => 'A Materno',
            'calf1' => 'Calf1',
            'calf2' => 'Calf2',
            'calf3' => 'Calf3',
            'calf4' => 'Calf4',
            'calf5' => 'Calf5',
            'promedio' => 'Promedio',
        ];
    }
}
