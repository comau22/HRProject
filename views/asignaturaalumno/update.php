<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AsignaturaAlumno */

$this->title = 'Update Asignatura Alumno: ' . $model->id_asignatura_alumno;
$this->params['breadcrumbs'][] = ['label' => 'Asignatura Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_asignatura_alumno, 'url' => ['view', 'id' => $model->id_asignatura_alumno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asignatura-alumno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
