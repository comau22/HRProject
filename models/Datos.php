<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datos".
 *
 * @property int $ID
 * @property string $nombre
 * @property int $telefono
 * @property string $campus
 * @property string $departamento
 *
 * @property Campus $campus0
 * @property Departamentos $departamento0
 */
class Datos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'telefono', 'campus', 'departamento'], 'required'],
            [['telefono'], 'integer'],
            [['nombre', 'departamento'], 'string', 'max' => 20],
            [['campus'], 'string', 'max' => 10],
            [['campus'], 'exist', 'skipOnError' => true, 'targetClass' => Campus::className(), 'targetAttribute' => ['campus' => 'nombre']],
            [['departamento'], 'exist', 'skipOnError' => true, 'targetClass' => Departamentos::className(), 'targetAttribute' => ['departamento' => 'nombre']],
        ];
    }
        
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'nombre' => 'Nombre',
            'telefono' => 'Telefono',
            'campus' => 'Campus',
            'departamento' => 'Departamento',
        ];
    }

    /**
     * Gets query for [[Campus0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCampus0()
    {
        return $this->hasOne(Campus::className(), ['nombre' => 'campus']);
    }

    /**
     * Gets query for [[Departamento0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamento0()
    {
        return $this->hasOne(Departamentos::className(), ['nombre' => 'departamento']);
    }
}
