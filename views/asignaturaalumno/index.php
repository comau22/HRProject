<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AsignaturaAlumnoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asignatura Alumnos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asignatura-alumno-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Asignatura Alumno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_asignatura_alumno',
            'id_asignatura',
            'id_alumno',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
