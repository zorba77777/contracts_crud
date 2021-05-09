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

$this->title = 'Создать запись';
$this->params['breadcrumbs'][] = ['label' => 'Договоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_create', [
        'contract' => $contract,
        'events' => $events,
        'users' => $users,
        'branches' => $branches,
        'statuses' => $statuses
    ]) ?>

</div>
