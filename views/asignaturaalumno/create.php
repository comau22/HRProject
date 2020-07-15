<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AsignaturaAlumno */

$this->title = 'Create Asignatura Alumno';
$this->params['breadcrumbs'][] = ['label' => 'Asignatura Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asignatura-alumno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
