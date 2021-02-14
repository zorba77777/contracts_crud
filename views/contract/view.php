<?php

use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Contract */

$this->title = $model->counterparty;
$this->params['breadcrumbs'][] = ['label' => 'Договоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>
<div class="contract-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Копировать', ['duplicate', 'id' => $model->id], ['class' => 'btn btn-warning', 'target' => '_blank', 'data-pjax' => 0]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'counterparty',
            'subject',
            [
                'attribute' => 'branch',
                'value' => function ($model) {
                    return $model->branch0->name;
                }
            ],
            [
                'attribute' => 'lawyer',
                'value' => function ($model) {
                    return $model->lawyer0->username;
                }
            ],
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    return $model->status0->name;
                }
            ],
            'start_date',
            'check_date',
            [
                'label' => 'Веха1',
                'visible' => count($model->events) >= 1,
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
                'visible' => count($model->events) >= 1,
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
                'visible' => count($model->events) >= 2,
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
                'visible' => count($model->events) >= 2,
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
                'visible' => count($model->events) >= 3,
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
                'visible' => count($model->events) >= 3,
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
                'visible' => count($model->events) >= 4,
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
                'visible' => count($model->events) >= 4,
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
                'visible' => count($model->events) >= 5,
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
                'visible' => count($model->events) >= 5,
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
                'visible' => count($model->events) >= 6,
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
                'visible' => count($model->events) >= 6,
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
                'visible' => count($model->events) >= 7,
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
                'visible' => count($model->events) >= 7,
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
                'visible' => count($model->events) >= 8,
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
                'visible' => count($model->events) >= 8,
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
                'visible' => count($model->events) >= 9,
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
                'visible' => count($model->events) >= 9,
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
                'visible' => count($model->events) >= 10,
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
                'visible' => count($model->events) >= 10,
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
                'visible' => count($model->events) >= 11,
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
                'visible' => count($model->events) >= 11,
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
                'visible' => count($model->events) >= 12,
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
                'visible' => count($model->events) >= 12,
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
                'visible' => count($model->events) >= 13,
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
                'visible' => count($model->events) >= 13,
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
                'visible' => count($model->events) >= 14,
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
                'visible' => count($model->events) >= 14,
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
                'visible' => count($model->events) >= 15,
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
                'visible' => count($model->events) >= 15,
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
                'visible' => count($model->events) >= 16,
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
                'visible' => count($model->events) >= 16,
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
                'visible' => count($model->events) >= 17,
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
                'visible' => count($model->events) >= 17,
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
                'visible' => count($model->events) >= 18,
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
                'visible' => count($model->events) >= 18,
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
                'visible' => count($model->events) >= 19,
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
                'visible' => count($model->events) >= 19,
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
                'visible' => count($model->events) >= 20,
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
                'visible' => count($model->events) >= 20,
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
                'visible' => count($model->events) >= 21,
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
                'visible' => count($model->events) >= 21,
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
                'visible' => count($model->events) >= 22,
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
                'visible' => count($model->events) >= 22,
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
                'visible' => count($model->events) >= 23,
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
                'visible' => count($model->events) >= 23,
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
                'visible' => count($model->events) >= 24,
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
                'visible' => count($model->events) >= 24,
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
                'visible' => count($model->events) >= 25,
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
                'visible' => count($model->events) >= 25,
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
                'visible' => count($model->events) >= 26,
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
                'visible' => count($model->events) >= 26,
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
                'visible' => count($model->events) >= 27,
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
                'visible' => count($model->events) >= 27,
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
                'visible' => count($model->events) >= 28,
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
                'visible' => count($model->events) >= 28,
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
                'visible' => count($model->events) >= 29,
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
                'visible' => count($model->events) >= 29,
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
                'visible' => count($model->events) >= 30,
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
                'visible' => count($model->events) >= 30,
                'value' => function ($model) {
                    if ($model->events && array_key_exists(29, $model->events)) {
                        return $model->events[29]->date;
                    } else {
                        return '';
                    }
                }
            ],
            'created_at',
            'updated_at',
            [
                'attribute' => 'creator',
                'value' => function ($model) {
                    if ($model->creator0) {
                        return $model->creator0->username;
                    } else {
                        return '';
                    }
                }
            ],
        ],
    ]) ?>

</div>
