<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContractStatus */

$this->title = 'Create Contract Status';
$this->params['breadcrumbs'][] = ['label' => 'Contract Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
