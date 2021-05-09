<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $contract app\models\Contract */
/* @var $events array */
/* @var $branches array */
/* @var $users array */
/* @var $statuses array */

$this->registerJsFile(
    '@web/js/contract_edit1.1.js',
    ['depends' => [\yii\web\JqueryAsset::className()]]
);

$this->title = 'Редактировать информацию об элементе: ' . $contract->counterparty;
$this->params['breadcrumbs'][] = ['label' => 'Договоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $contract->counterparty, 'url' => ['view', 'id' => $contract->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="contract-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_update', [
        'contract' => $contract,
        'events' => $events,
        'users' => $users,
        'branches' => $branches,
        'statuses' => $statuses
    ]) ?>

</div>
