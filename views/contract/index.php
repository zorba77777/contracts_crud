<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ContractSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $columnsVisibility array */

$this->title = 'Договоры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать элемент', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Экспортировать в Excel', ['export-excel'], ['class' => 'btn btn-success', 'target' => '_blank']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' => ''],
        'pager' => [
            'firstPageLabel' => 'Первая',
            'lastPageLabel'  => 'Последняя'
        ],
        'columns' => [
            ['class' => 'yii\grid\ActionColumn'],
            'id',
            'counterparty',
            'subject',
            'branch',
            'lawyer',
            'status',
            'start_date',
            'milestone1:ntext',
            [
                'attribute' => 'date1',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
            ],
            [
                'attribute' => 'milestone2',
                'visible' => $columnsVisibility['milestone2']
            ],
            [
                'attribute' => 'date2',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date2']
            ],
            [
                'attribute' => 'milestone3',
                'visible' => $columnsVisibility['milestone3']
            ],
            [
                'attribute' => 'date3',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date3']
            ],
            [
                'attribute' => 'milestone4',
                'visible' => $columnsVisibility['milestone4']
            ],
            [
                'attribute' => 'date4',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date4']
            ],
            [
                'attribute' => 'milestone5',
                'visible' => $columnsVisibility['milestone5']
            ],
            [
                'attribute' => 'date5',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date5']
            ],
            [
                'attribute' => 'milestone6',
                'visible' => $columnsVisibility['milestone6']
            ],
            [
                'attribute' => 'date6',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date6']
            ],
            [
                'attribute' => 'milestone7',
                'visible' => $columnsVisibility['milestone7']
            ],
            [
                'attribute' => 'date7',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date7']
            ],
            [
                'attribute' => 'milestone8',
                'visible' => $columnsVisibility['milestone8']
            ],
            [
                'attribute' => 'date8',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date8']
            ],
            [
                'attribute' => 'milestone9',
                'visible' => $columnsVisibility['milestone9']
            ],
            [
                'attribute' => 'date9',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date9']
            ],
            [
                'attribute' => 'milestone10',
                'visible' => $columnsVisibility['milestone10']
            ],
            [
                'attribute' => 'date10',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date10']
            ],
            [
                'attribute' => 'milestone11',
                'visible' => $columnsVisibility['milestone11']
            ],
            [
                'attribute' => 'date11',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date11']
            ],
            [
                'attribute' => 'milestone12',
                'visible' => $columnsVisibility['milestone12']
            ],
            [
                'attribute' => 'date12',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date12']
            ],
            [
                'attribute' => 'milestone13',
                'visible' => $columnsVisibility['milestone13']
            ],
            [
                'attribute' => 'date13',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date13']
            ],
            [
                'attribute' => 'milestone14',
                'visible' => $columnsVisibility['milestone14']
            ],
            [
                'attribute' => 'date14',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date14']
            ],
            [
                'attribute' => 'milestone15',
                'visible' => $columnsVisibility['milestone15']
            ],
            [
                'attribute' => 'date15',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date15']
            ],
            [
                'attribute' => 'milestone16',
                'visible' => $columnsVisibility['milestone16']
            ],
            [
                'attribute' => 'date16',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date16']
            ],
            [
                'attribute' => 'milestone17',
                'visible' => $columnsVisibility['milestone17']
            ],
            [
                'attribute' => 'date17',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date17']
            ],
            [
                'attribute' => 'milestone18',
                'visible' => $columnsVisibility['milestone18']
            ],
            [
                'attribute' => 'date18',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date18']
            ],
            [
                'attribute' => 'milestone19',
                'visible' => $columnsVisibility['milestone19']
            ],
            [
                'attribute' => 'date19',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date19']
            ],
            [
                'attribute' => 'milestone20',
                'visible' => $columnsVisibility['milestone20']
            ],
            [
                'attribute' => 'date20',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date20']
            ],
            [
                'attribute' => 'milestone21',
                'visible' => $columnsVisibility['milestone21']
            ],
            [
                'attribute' => 'date21',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date21']
            ],
            [
                'attribute' => 'milestone22',
                'visible' => $columnsVisibility['milestone22']
            ],
            [
                'attribute' => 'date22',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date22']
            ],
            [
                'attribute' => 'milestone23',
                'visible' => $columnsVisibility['milestone23']
            ],
            [
                'attribute' => 'date23',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date23']
            ],
            [
                'attribute' => 'milestone24',
                'visible' => $columnsVisibility['milestone24']
            ],
            [
                'attribute' => 'date24',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date24']
            ],
            [
                'attribute' => 'milestone25',
                'visible' => $columnsVisibility['milestone25']
            ],
            [
                'attribute' => 'date25',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date25']
            ],
            [
                'attribute' => 'milestone26',
                'visible' => $columnsVisibility['milestone26']
            ],
            [
                'attribute' => 'date26',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date26']
            ],
            [
                'attribute' => 'milestone27',
                'visible' => $columnsVisibility['milestone27']
            ],
            [
                'attribute' => 'date27',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date27']
            ],
            [
                'attribute' => 'milestone28',
                'visible' => $columnsVisibility['milestone28']
            ],
            [
                'attribute' => 'date28',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date28']
            ],
            [
                'attribute' => 'milestone29',
                'visible' => $columnsVisibility['milestone29']
            ],
            [
                'attribute' => 'date29',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date29']
            ],
            [
                'attribute' => 'milestone30',
                'visible' => $columnsVisibility['milestone30']
            ],
            [
                'attribute' => 'date30',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'visible' => $columnsVisibility['date30']
            ],
            'creator'
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
