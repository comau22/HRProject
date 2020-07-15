<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlumnosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumnos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idAlumno') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'aPaterno') ?>

    <?= $form->field($model, 'aMaterno') ?>

    <?= $form->field($model, 'dia_nac') ?>

    <?php // echo $form->field($model, 'mes_nac') ?>

    <?php // echo $form->field($model, 'ano_nac') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'rfc') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'promedio') ?>

    <?php // echo $form->field($model, 'id_grupo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
