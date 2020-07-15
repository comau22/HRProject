<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Grupos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grupos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id parcial')->textInput() ?>

    <?= $form->field($model, 'salon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'turno')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
