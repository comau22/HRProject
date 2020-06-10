<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campus".
 *
 * @property int $ID
 * @property string $nombre
 * @property int $telefono
 *
 * @property Datos[] $datos
 */
class Campus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'campus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'nombre', 'telefono'], 'required'],
            [['ID', 'telefono'], 'integer'],
            [['nombre'], 'string', 'max' => 10],
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
        ];
    }

    /**
     * Gets query for [[Datos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDatos()
    {
        return $this->hasMany(Datos::className(), ['campus' => 'nombre']);
    }
}
