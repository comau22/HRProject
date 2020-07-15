<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calificacion".
 *
 * @property int $id_calificacion
 * @property int $calificacion
 * @property int $no_parcial
 * @property int $id_asignatura
 * @property int $id_alumno
 *
 * @property Alumnos $alumno
 * @property Asignatura $asignatura
 */
class Calificacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calificacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['calificacion', 'no_parcial', 'id_asignatura', 'id_alumno'], 'required'],
            [['calificacion', 'no_parcial', 'id_asignatura', 'id_alumno'], 'integer'],
            [['id_alumno'], 'exist', 'skipOnError' => true, 'targetClass' => Alumnos::className(), 'targetAttribute' => ['id_alumno' => 'idAlumno']],
            [['id_asignatura'], 'exist', 'skipOnError' => true, 'targetClass' => Asignatura::className(), 'targetAttribute' => ['id_asignatura' => 'id_asignatura']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_calificacion' => 'Id Calificacion',
            'calificacion' => 'Calificacion',
            'no_parcial' => 'No Parcial',
            'id_asignatura' => 'Id Asignatura',
            'id_alumno' => 'Id Alumno',
        ];
    }

    /**
     * Gets query for [[Alumno]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlumno()
    {
        return $this->hasOne(Alumnos::className(), ['idAlumno' => 'id_alumno']);
    }

    /**
     * Gets query for [[Asignatura]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsignatura()
    {
        return $this->hasOne(Asignatura::className(), ['id_asignatura' => 'id_asignatura']);
    }
}
