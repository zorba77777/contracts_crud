<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Contract */

$this->title = $model->counterparty;
$this->params['breadcrumbs'][] = ['label' => 'Договоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="contract-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'post',
            ],
        ]) ?>
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
                    return $model->branch0->branch;
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
                    return $model->status0->status;
                }
            ],
            'start_date',
            'milestone1:ntext',
            'date1',
            [
                'attribute' => 'milestone2',
                'visible' => $model->milestone2 ? true : false
            ],
            [
                'attribute' => 'date2',
                'visible' => $model->date2 ? true : false
            ],
            [
                'attribute' => 'milestone3',
                'visible' => $model->milestone3 ? true : false
            ],
            [
                'attribute' => 'date3',
                'visible' => $model->date3 ? true : false
            ],
            [
                'attribute' => 'milestone4',
                'visible' => $model->milestone4 ? true : false
            ],
            [
                'attribute' => 'date4',
                'visible' => $model->date4 ? true : false
            ],
            [
                'attribute' => 'milestone5',
                'visible' => $model->milestone5 ? true : false
            ],
            [
                'attribute' => 'date5',
                'visible' => $model->date5 ? true : false
            ],
            [
                'attribute' => 'milestone6',
                'visible' => $model->milestone6 ? true : false
            ],
            [
                'attribute' => 'date6',
                'visible' => $model->date6 ? true : false
            ],
            [
                'attribute' => 'milestone7',
                'visible' => $model->milestone7 ? true : false
            ],
            [
                'attribute' => 'date7',
                'visible' => $model->date7 ? true : false
            ],
            [
                'attribute' => 'milestone8',
                'visible' => $model->milestone8 ? true : false
            ],
            [
                'attribute' => 'date8',
                'visible' => $model->date8 ? true : false
            ],
            [
                'attribute' => 'milestone9',
                'visible' => $model->milestone9 ? true : false
            ],
            [
                'attribute' => 'date9',
                'visible' => $model->date9 ? true : false
            ],
            [
                'attribute' => 'milestone10',
                'visible' => $model->milestone10 ? true : false
            ],
            [
                'attribute' => 'date10',
                'visible' => $model->date10 ? true : false
            ],
            [
                'attribute' => 'milestone11',
                'visible' => $model->milestone11 ? true : false
            ],
            [
                'attribute' => 'date11',
                'visible' => $model->date11 ? true : false
            ],
            [
                'attribute' => 'milestone12',
                'visible' => $model->milestone12 ? true : false
            ],
            [
                'attribute' => 'date12',
                'visible' => $model->date12 ? true : false
            ],
            [
                'attribute' => 'milestone13',
                'visible' => $model->milestone13 ? true : false
            ],
            [
                'attribute' => 'date13',
                'visible' => $model->date13 ? true : false
            ],
            [
                'attribute' => 'milestone14',
                'visible' => $model->milestone14 ? true : false
            ],
            [
                'attribute' => 'date14',
                'visible' => $model->date14 ? true : false
            ],
            [
                'attribute' => 'milestone15',
                'visible' => $model->milestone15 ? true : false
            ],
            [
                'attribute' => 'date15',
                'visible' => $model->date15 ? true : false
            ],
            [
                'attribute' => 'milestone16',
                'visible' => $model->milestone16 ? true : false
            ],
            [
                'attribute' => 'date16',
                'visible' => $model->date16 ? true : false
            ],
            [
                'attribute' => 'milestone17',
                'visible' => $model->milestone17 ? true : false
            ],
            [
                'attribute' => 'date17',
                'visible' => $model->date17 ? true : false
            ],
            [
                'attribute' => 'milestone18',
                'visible' => $model->milestone18 ? true : false
            ],
            [
                'attribute' => 'date18',
                'visible' => $model->date18 ? true : false
            ],
            [
                'attribute' => 'milestone19',
                'visible' => $model->milestone19 ? true : false
            ],
            [
                'attribute' => 'date19',
                'visible' => $model->date19 ? true : false
            ],
            [
                'attribute' => 'milestone20',
                'visible' => $model->milestone20 ? true : false
            ],
            [
                'attribute' => 'date20',
                'visible' => $model->date20 ? true : false
            ],
            [
                'attribute' => 'milestone21',
                'visible' => $model->milestone21 ? true : false
            ],
            [
                'attribute' => 'date21',
                'visible' => $model->date21 ? true : false
            ],
            [
                'attribute' => 'milestone22',
                'visible' => $model->milestone22 ? true : false
            ],
            [
                'attribute' => 'date22',
                'visible' => $model->date22 ? true : false
            ],
            [
                'attribute' => 'milestone23',
                'visible' => $model->milestone23 ? true : false
            ],
            [
                'attribute' => 'date23',
                'visible' => $model->date23 ? true : false
            ],
            [
                'attribute' => 'milestone24',
                'visible' => $model->milestone24 ? true : false
            ],
            [
                'attribute' => 'date24',
                'visible' => $model->date24 ? true : false
            ],
            [
                'attribute' => 'milestone25',
                'visible' => $model->milestone25 ? true : false
            ],
            [
                'attribute' => 'date25',
                'visible' => $model->date25 ? true : false
            ],
            [
                'attribute' => 'milestone26',
                'visible' => $model->milestone26 ? true : false
            ],
            [
                'attribute' => 'date26',
                'visible' => $model->date26 ? true : false
            ],
            [
                'attribute' => 'milestone27',
                'visible' => $model->milestone27 ? true : false
            ],
            [
                'attribute' => 'date27',
                'visible' => $model->date27 ? true : false
            ],
            [
                'attribute' => 'milestone28',
                'visible' => $model->milestone28 ? true : false
            ],
            [
                'attribute' => 'date28',
                'visible' => $model->date28 ? true : false
            ],
            [
                'attribute' => 'milestone29',
                'visible' => $model->milestone29 ? true : false
            ],
            [
                'attribute' => 'date29',
                'visible' => $model->date29 ? true : false
            ],
            [
                'attribute' => 'milestone30',
                'visible' => $model->milestone30 ? true : false
            ],
            [
                'attribute' => 'date30',
                'visible' => $model->date30 ? true : false
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
