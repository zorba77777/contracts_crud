<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contract */
/* @var $branches array */
/* @var $users array */

$this->title = 'Создать запись';
$this->params['breadcrumbs'][] = ['label' => 'Договоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'users' => $users,
        'branches' => $branches
    ]) ?>

</div>
