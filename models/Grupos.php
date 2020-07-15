<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupos".
 *
 * @property int $id_grupo
 * @property int $id parcial
 * @property string $salon
 * @property string $turno
 *
 * @property Alumnos[] $alumnos
 */
class Grupos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grupos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id parcial', 'salon', 'turno'], 'required'],
            [['id parcial'], 'integer'],
            [['salon', 'turno'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_grupo' => 'Id Grupo',
            'id parcial' => 'Id Parcial',
            'salon' => 'Salon',
            'turno' => 'Turno',
        ];
    }

    /**
     * Gets query for [[Alumnos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlumnos()
    {
        return $this->hasMany(Alumnos::className(), ['id_grupo' => 'id_grupo']);
    }
}
