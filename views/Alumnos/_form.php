<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alumnos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumnos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aPaterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aMaterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dia_nac')->textInput() ?>

    <?= $form->field($model, 'mes_nac')->textInput() ?>

    <?= $form->field($model, 'ano_nac')->textInput() ?>

    <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rfc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promedio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_grupo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
