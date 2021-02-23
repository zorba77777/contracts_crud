<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $users array */

$this->title = 'События';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'date',
                'contentOptions' => ['style' => 'white-space: nowrap;']
            ],
            [
                'attribute' => 'contract',
                'filter' => false,
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::a($model->contract0->counterparty, '/contract/view?id=' . $model->contract0->id);
                }
            ],
            [
                'attribute' => 'contract0',
                'value' => 'contract0.subject'
            ],
            [
                'attribute' => 'branch0',
                'value' => 'branch0.name'
            ],
            [
                'attribute' => 'content',
                'label' => 'Содержание события'
            ],

            [
                'attribute' => 'user',
                'filter' => $users,
                'value' => 'user0.username'
            ],
            [
                'attribute' => 'creator',
                'filter' => $users,
                'value' => 'creator0.username'
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
