<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlumnosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumnos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumnos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Alumnos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idAlumno',
            'nombre',
            'aPaterno',
            'aMaterno',
            'dia_nac',
            //'mes_nac',
            //'ano_nac',
            //'sexo',
            //'rfc',
            //'status',
            //'promedio',
            //'id_grupo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
