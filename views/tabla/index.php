<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TablaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tablas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tabla-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tabla', ['create'], ['class' => 'btn btn-success']) ?>
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
            'calf1',
            //'calf2',
            //'calf3',
            //'calf4',
            //'calf5',
            //'promedio',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
