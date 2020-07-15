<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alumnos".
 *
 * @property int $idAlumno
 * @property string $nombre
 * @property string $aPaterno
 * @property string $aMaterno
 * @property int $dia_nac
 * @property int $mes_nac
 * @property int $ano_nac
 * @property string $sexo
 * @property string $rfc
 * @property string $status
 * @property float $promedio
 * @property int $id_grupo
 *
 * @property Grupos $grupo
 * @property AsignaturaAlumno[] $asignaturaAlumnos
 * @property Calificacion[] $calificacions
 */
class Alumnos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alumnos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'aPaterno', 'aMaterno', 'dia_nac', 'mes_nac', 'ano_nac', 'sexo', 'rfc', 'status', 'promedio', 'id_grupo'], 'required'],
            [['dia_nac', 'mes_nac', 'ano_nac', 'id_grupo'], 'integer'],
            [['promedio'], 'number'],
            [['nombre', 'aPaterno', 'aMaterno'], 'string', 'max' => 15],
            [['sexo', 'status'], 'string', 'max' => 20],
            [['rfc'], 'string', 'max' => 13],
            [['id_grupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupos::className(), 'targetAttribute' => ['id_grupo' => 'id_grupo']],
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
            'dia_nac' => 'Dia Nac',
            'mes_nac' => 'Mes Nac',
            'ano_nac' => 'Ano Nac',
            'sexo' => 'Sexo',
            'rfc' => 'Rfc',
            'status' => 'Status',
            'promedio' => 'Promedio',
            'id_grupo' => 'Id Grupo',
        ];
    }

    /**
     * Gets query for [[Grupo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGrupo()
    {
        return $this->hasOne(Grupos::className(), ['id_grupo' => 'id_grupo']);
    }

    /**
     * Gets query for [[AsignaturaAlumnos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsignaturaAlumnos()
    {
        return $this->hasMany(AsignaturaAlumno::className(), ['id_alumno' => 'idAlumno']);
    }

    /**
     * Gets query for [[Calificacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalificacions()
    {
        return $this->hasMany(Calificacion::className(), ['id_alumno' => 'idAlumno']);
    }
}
