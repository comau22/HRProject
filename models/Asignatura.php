<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asignatura".
 *
 * @property int $id_asignatura
 * @property string $nombre
 * @property int $id_Docente
 *
 * @property Docentes $docente
 * @property AsignaturaAlumno[] $asignaturaAlumnos
 * @property Calificacion[] $calificacions
 */
class Asignatura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asignatura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'id_Docente'], 'required'],
            [['id_Docente'], 'integer'],
            [['nombre'], 'string', 'max' => 20],
            [['id_Docente'], 'exist', 'skipOnError' => true, 'targetClass' => Docentes::className(), 'targetAttribute' => ['id_Docente' => 'id_Docente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_asignatura' => 'Id Asignatura',
            'nombre' => 'Nombre',
            'id_Docente' => 'Id Docente',
        ];
    }

    /**
     * Gets query for [[Docente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDocente()
    {
        return $this->hasOne(Docentes::className(), ['id_Docente' => 'id_Docente']);
    }

    /**
     * Gets query for [[AsignaturaAlumnos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsignaturaAlumnos()
    {
        return $this->hasMany(AsignaturaAlumno::className(), ['id_asignatura' => 'id_asignatura']);
    }

    /**
     * Gets query for [[Calificacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalificacions()
    {
        return $this->hasMany(Calificacion::className(), ['id_asignatura' => 'id_asignatura']);
    }
}
