<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Calificacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calificacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'calificacion')->textInput() ?>

    <?= $form->field($model, 'no_parcial')->textInput() ?>

    <?= $form->field($model, 'id_asignatura')->textInput() ?>

    <?= $form->field($model, 'id_alumno')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
