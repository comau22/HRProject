<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamentos".
 *
 * @property int $ID
 * @property string $nombre
 * @property int $telefono
 * @property string $campus
 *
 * @property Datos[] $datos
 */
class Departamentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departamentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'nombre', 'telefono', 'campus'], 'required'],
            [['ID', 'telefono'], 'integer'],
            [['nombre'], 'string', 'max' => 20],
            [['campus'], 'string', 'max' => 10],
            [['nombre'], 'unique'],
            [['ID'], 'unique'],
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
        ];
    }

    /**
     * Gets query for [[Datos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatos()
    {
        return $this->hasMany(Datos::className(), ['departamento' => 'nombre']);
    }
}
