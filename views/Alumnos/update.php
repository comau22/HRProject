<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */

$this->title = 'Update Alumnos: ' . $model->idAlumno;
$this->params['breadcrumbs'][] = ['label' => 'Alumnos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAlumno, 'url' => ['view', 'id' => $model->idAlumno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alumnos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
