<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Docentes */

$this->title = 'Update Docentes: ' . $model->id_Docente;
$this->params['breadcrumbs'][] = ['label' => 'Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_Docente, 'url' => ['view', 'id' => $model->id_Docente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="docentes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
