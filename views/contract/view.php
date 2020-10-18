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
            'branch',
            'lawyer',
            'status',
            'start_date',
            'milestone1:ntext',
            'date1',
            'milestone2:ntext',
            'date2',
            'milestone3:ntext',
            'date3',
            'milestone4:ntext',
            'date4',
            'milestone5:ntext',
            'date5',
            'milestone6:ntext',
            'date6',
            'milestone7:ntext',
            'date7',
            'milestone8:ntext',
            'date8',
            'milestone9:ntext',
            'date9',
            'milestone10:ntext',
            'date10',
            'milestone11:ntext',
            'date11',
            'milestone12:ntext',
            'date12',
            'milestone13:ntext',
            'date13',
            'milestone14:ntext',
            'date14',
            'milestone15:ntext',
            'date15',
            'milestone16:ntext',
            'date16',
            'milestone17:ntext',
            'date17',
            'milestone18:ntext',
            'date18',
            'milestone19:ntext',
            'date19',
            'milestone20:ntext',
            'date20',
            'milestone21:ntext',
            'date21',
            'milestone22:ntext',
            'date22',
            'milestone23:ntext',
            'date23',
            'milestone24:ntext',
            'date24',
            'milestone25:ntext',
            'date25',
            'milestone26:ntext',
            'date26',
            'milestone27:ntext',
            'date27',
            'milestone28:ntext',
            'date28',
            'milestone29:ntext',
            'date29',
            'milestone30:ntext',
            'date30',
            'created_at',
            'updated_at',
            'creator',
        ],
    ]) ?>

</div>
