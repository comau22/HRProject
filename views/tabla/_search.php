<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TablaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tabla-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idAlumno') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'aPaterno') ?>

    <?= $form->field($model, 'aMaterno') ?>

    <?= $form->field($model, 'calf1') ?>

    <?php // echo $form->field($model, 'calf2') ?>

    <?php // echo $form->field($model, 'calf3') ?>

    <?php // echo $form->field($model, 'calf4') ?>

    <?php // echo $form->field($model, 'calf5') ?>

    <?php // echo $form->field($model, 'promedio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
