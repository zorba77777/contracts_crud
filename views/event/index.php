<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $types array */
/* @var $users array */
/* @var $contracts array */

$this->title = 'События';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать событие', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
//            [
//                'attribute' => 'type',
//                'filter' => $types,
//                'value' => function ($model) {
//                    return $model->type0->name;
//                }
//            ],
            'date',
            [
                'attribute' => 'contract',
                'filter' => $contracts,
                'value' => function ($model) {
                    return $model->contract0->counterparty;
                }
            ],
            [
                'attribute' => 'user',
                'filter' => $users,
                'value' => function ($model) {
                    return $model->user0->username;
                }
            ],
            'content:ntext',
            [
                'attribute' => 'creator',
                'filter' => $users,
                'value' => function ($model) {
                    return $model->creator0->username;
                }
            ],
//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
