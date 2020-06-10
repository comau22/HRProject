<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tabla */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tabla-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aPaterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aMaterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calf1')->textInput() ?>

    <?= $form->field($model, 'calf2')->textInput() ?>

    <?= $form->field($model, 'calf3')->textInput() ?>

    <?= $form->field($model, 'calf4')->textInput() ?>

    <?= $form->field($model, 'calf5')->textInput() ?>

    <?= $form->field($model, 'promedio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
