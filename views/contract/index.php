<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ContractSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

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
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone2:ntext',
            [
                'attribute' => 'date2',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone3:ntext',
            [
                'attribute' => 'date3',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone4:ntext',
            [
                'attribute' => 'date4',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone5:ntext',
            [
                'attribute' => 'date5',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone6:ntext',
            [
                'attribute' => 'date6',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone7:ntext',
            [
                'attribute' => 'date7',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone8:ntext',
            [
                'attribute' => 'date8',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone9:ntext',
            [
                'attribute' => 'date9',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone10:ntext',
            [
                'attribute' => 'date10',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone11:ntext',
            [
                'attribute' => 'date11',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone12:ntext',
            [
                'attribute' => 'date12',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone13:ntext',
            [
                'attribute' => 'date13',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone14:ntext',
            [
                'attribute' => 'date14',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone15:ntext',
            [
                'attribute' => 'date15',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone16:ntext',
            [
                'attribute' => 'date16',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone17:ntext',
            [
                'attribute' => 'date17',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone18:ntext',
            [
                'attribute' => 'date18',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone19:ntext',
            [
                'attribute' => 'date19',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone20:ntext',
            [
                'attribute' => 'date20',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone21:ntext',
            [
                'attribute' => 'date21',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone22:ntext',
            [
                'attribute' => 'date22',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone23:ntext',
            [
                'attribute' => 'date23',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone24:ntext',
            [
                'attribute' => 'date24',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone25:ntext',
            [
                'attribute' => 'date25',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone26:ntext',
            [
                'attribute' => 'date26',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone27:ntext',
            [
                'attribute' => 'date27',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone28:ntext',
            [
                'attribute' => 'date28',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone29:ntext',
            [
                'attribute' => 'date29',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            'milestone30:ntext',
            [
                'attribute' => 'date30',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            // 'created_at',
            // 'updated_at',
            'creator'
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
