<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocentesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="docentes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_Docente') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'aPaterno') ?>

    <?= $form->field($model, 'aMaterno') ?>

    <?= $form->field($model, 'dia_nac') ?>

    <?php // echo $form->field($model, 'mes_nac') ?>

    <?php // echo $form->field($model, 'ano_nac') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'rfc') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'calle') ?>

    <?php // echo $form->field($model, 'num_calle') ?>

    <?php // echo $form->field($model, 'colonia') ?>

    <?php // echo $form->field($model, 'cp') ?>

    <?php // echo $form->field($model, 'id_Materia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
