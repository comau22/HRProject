<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocentesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Docentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="docentes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Docentes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_Docente',
            'nombre',
            'aPaterno',
            'aMaterno',
            'dia_nac',
            //'mes_nac',
            //'ano_nac',
            //'sexo',
            //'rfc',
            //'status',
            //'calle',
            //'num_calle',
            //'colonia',
            //'cp',
            //'id_Materia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
