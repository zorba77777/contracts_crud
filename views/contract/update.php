<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contract */
/* @var $branches array */
/* @var $users array */

$this->title = 'Обновить информацию об элементе: ' . $model->counterparty;
$this->params['breadcrumbs'][] = ['label' => 'Договоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->counterparty, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="contract-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form2', [
        'model' => $model,
        'users' => $users,
        'branches' => $branches
    ]) ?>

</div>
