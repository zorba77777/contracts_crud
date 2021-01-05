<?php

use yii\bootstrap\Button;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContractSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $branches array */
/* @var $users array */
/* @var $statuses array */
/* @var $maxOrdinalNumber integer */
/* @var $onlyMyContracts bool */

$this->registerJsFile(
    '@web/js/contract_listed.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->title = 'Договоры';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Rounded switch -->
<div class="container-toggle">
    <label class="switch">
        <input type="checkbox" id="show-my" <?= $onlyMyContracts ? 'checked' : '' ?>>
        <span class="slider round"></span>
    </label>
    <span id="switch-text">&nbsp;Показывать только мои договоры</span>
</div>

<div class="contract-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать элемент', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Экспортировать в Excel всё', ['get-excel?separated=no'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Экспортировать в Excel по филиалам', ['get-excel?separated=yes'], ['class' => 'btn btn-success']) ?>
    </p>



    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => ''],
        'pager' => [
            'firstPageLabel' => 'Первая',
            'lastPageLabel' => 'Последняя'
        ],
        'columns' => [
            ['class' => 'yii\grid\ActionColumn'],
            'id',
            'counterparty',
            'subject',
            [
                'attribute' => 'branch',
                'filter' => $branches,
                'value' => function ($model) {
                    return $model->branch0->name;
                }
            ],
            [
                'attribute' => 'lawyer',
                'filter' => $users,
                'value' => function ($model) {
                    return $model->lawyer0->username;
                }
            ],
            [
                'attribute' => 'status',
                'filter' => $statuses,
                'value' => function ($model) {
                    return $model->status0->name;
                }
            ],
            'start_date',
            'check_date',
            [
                'label' => 'Веха1',
                'value' => function ($model) {
                    if ($model->events && array_key_exists(0, $model->events)) {
                        return $model->events[0]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата1',
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(0, $model->events)) {
                        return $model->events[0]->date;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Веха2',
                'visible' => 1 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(1, $model->events)) {
                        return $model->events[1]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата2',
                'visible' => 1 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(1, $model->events)) {
                        return $model->events[1]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха3',
                'visible' => 2 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(2, $model->events)) {
                        return $model->events[2]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата3',
                'visible' => 2 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(2, $model->events)) {
                        return $model->events[2]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха4',
                'visible' => 3 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(3, $model->events)) {
                        return $model->events[3]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата4',
                'visible' => 3 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(3, $model->events)) {
                        return $model->events[3]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха5',
                'visible' => 4 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(4, $model->events)) {
                        return $model->events[4]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата5',
                'visible' => 4 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(4, $model->events)) {
                        return $model->events[4]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха6',
                'visible' => 5 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(5, $model->events)) {
                        return $model->events[5]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата6',
                'visible' => 5 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(5, $model->events)) {
                        return $model->events[5]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха7',
                'visible' => 6 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(6, $model->events)) {
                        return $model->events[6]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата7',
                'visible' => 6 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(6, $model->events)) {
                        return $model->events[6]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха8',
                'visible' => 7 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(7, $model->events)) {
                        return $model->events[7]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата8',
                'visible' => 7 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(7, $model->events)) {
                        return $model->events[7]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха9',
                'visible' => 8 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(8, $model->events)) {
                        return $model->events[8]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата9',
                'visible' => 8 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(8, $model->events)) {
                        return $model->events[8]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха10',
                'visible' => 9 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(9, $model->events)) {
                        return $model->events[9]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата10',
                'visible' => 9 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(9, $model->events)) {
                        return $model->events[9]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха11',
                'visible' => 10 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(10, $model->events)) {
                        return $model->events[10]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата11',
                'visible' => 10 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(10, $model->events)) {
                        return $model->events[10]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха12',
                'visible' => 11 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(11, $model->events)) {
                        return $model->events[11]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата12',
                'visible' => 11 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(11, $model->events)) {
                        return $model->events[11]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха13',
                'visible' => 12 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(12, $model->events)) {
                        return $model->events[12]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата13',
                'visible' => 12 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(12, $model->events)) {
                        return $model->events[12]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха14',
                'visible' => 13 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(13, $model->events)) {
                        return $model->events[13]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата14',
                'visible' => 13 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(13, $model->events)) {
                        return $model->events[13]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха15',
                'visible' => 14 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(14, $model->events)) {
                        return $model->events[14]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата15',
                'visible' => 14 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(14, $model->events)) {
                        return $model->events[14]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха16',
                'visible' => 15 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(15, $model->events)) {
                        return $model->events[15]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата16',
                'visible' => 15 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(15, $model->events)) {
                        return $model->events[15]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха17',
                'visible' => 16 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(16, $model->events)) {
                        return $model->events[16]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата17',
                'visible' => 16 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(16, $model->events)) {
                        return $model->events[16]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха18',
                'visible' => 17 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(17, $model->events)) {
                        return $model->events[17]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата18',
                'visible' => 17 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(17, $model->events)) {
                        return $model->events[17]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха19',
                'visible' => 18 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(18, $model->events)) {
                        return $model->events[18]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата19',
                'visible' => 18 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(18, $model->events)) {
                        return $model->events[18]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха20',
                'visible' => 19 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(19, $model->events)) {
                        return $model->events[19]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата20',
                'visible' => 19 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(19, $model->events)) {
                        return $model->events[19]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха21',
                'visible' => 20 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(20, $model->events)) {
                        return $model->events[20]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата21',
                'visible' => 20 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(20, $model->events)) {
                        return $model->events[20]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха22',
                'visible' => 21 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(21, $model->events)) {
                        return $model->events[21]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата22',
                'visible' => 21 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(21, $model->events)) {
                        return $model->events[21]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха23',
                'visible' => 22 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(22, $model->events)) {
                        return $model->events[22]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата23',
                'visible' => 22 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(22, $model->events)) {
                        return $model->events[22]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха24',
                'visible' => 23 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(23, $model->events)) {
                        return $model->events[23]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата24',
                'visible' => 23 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(23, $model->events)) {
                        return $model->events[23]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха25',
                'visible' => 24 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(24, $model->events)) {
                        return $model->events[24]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата25',
                'visible' => 24 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(24, $model->events)) {
                        return $model->events[24]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха26',
                'visible' => 25 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(25, $model->events)) {
                        return $model->events[25]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата26',
                'visible' => 25 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(25, $model->events)) {
                        return $model->events[25]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха27',
                'visible' => 26 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(26, $model->events)) {
                        return $model->events[26]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата27',
                'visible' => 26 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(26, $model->events)) {
                        return $model->events[26]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха28',
                'visible' => 27 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(27, $model->events)) {
                        return $model->events[27]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата28',
                'visible' => 27 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(27, $model->events)) {
                        return $model->events[27]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха29',
                'visible' => 28 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(28, $model->events)) {
                        return $model->events[28]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата29',
                'visible' => 28 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(28, $model->events)) {
                        return $model->events[28]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'label' => 'Веха30',
                'visible' => 29 <= $maxOrdinalNumber,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(29, $model->events)) {
                        return $model->events[29]->content;
                    } else {
                        return '';
                    }
                }
            ],
            [
                'label' => 'Дата30',
                'visible' => 29 <= $maxOrdinalNumber,
                'contentOptions' => ['style' => 'white-space: nowrap;'],
                'value' => function ($model) {
                    if ($model->events && array_key_exists(29, $model->events)) {
                        return $model->events[29]->date;
                    } else {
                        return '';
                    }
                }
            ],

            [
                'attribute' => 'creator',
                'filter' => $users,
                'value' => function ($model) {
                    if ($model->creator0) {
                        return $model->creator0->username;
                    } else {
                        return '';
                    }
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

    <?= Button::widget([
        'label' => 'Показать все договоры на одной странице',
        'options' => [
            'class' => 'btn-lg',
            'id' => 'show-all'
        ],
    ]); ?>

</div>
