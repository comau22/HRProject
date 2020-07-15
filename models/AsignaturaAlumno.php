<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asignatura_alumno".
 *
 * @property int $id_asignatura_alumno
 * @property int $id_asignatura
 * @property int $id_alumno
 *
 * @property Alumnos $alumno
 * @property Asignatura $asignatura
 */
class AsignaturaAlumno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asignatura_alumno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_asignatura', 'id_alumno'], 'required'],
            [['id_asignatura', 'id_alumno'], 'integer'],
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
            'id_asignatura_alumno' => 'Id Asignatura Alumno',
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
