<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContractSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'counterparty') ?>

    <?= $form->field($model, 'subject') ?>

    <?= $form->field($model, 'branch') ?>

    <?php // echo $form->field($model, 'lawyer') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'start_date') ?>

    <?php // echo $form->field($model, 'milestone1') ?>

    <?php // echo $form->field($model, 'date1') ?>

    <?php // echo $form->field($model, 'milestone2') ?>

    <?php // echo $form->field($model, 'date2') ?>

    <?php // echo $form->field($model, 'milestone3') ?>

    <?php // echo $form->field($model, 'date3') ?>

    <?php // echo $form->field($model, 'milestone4') ?>

    <?php // echo $form->field($model, 'date4') ?>

    <?php // echo $form->field($model, 'milestone5') ?>

    <?php // echo $form->field($model, 'date5') ?>

    <?php // echo $form->field($model, 'milestone6') ?>

    <?php // echo $form->field($model, 'date6') ?>

    <?php // echo $form->field($model, 'milestone7') ?>

    <?php // echo $form->field($model, 'date7') ?>

    <?php // echo $form->field($model, 'milestone8') ?>

    <?php // echo $form->field($model, 'date8') ?>

    <?php // echo $form->field($model, 'milestone9') ?>

    <?php // echo $form->field($model, 'date9') ?>

    <?php // echo $form->field($model, 'milestone10') ?>

    <?php // echo $form->field($model, 'date10') ?>

    <?php // echo $form->field($model, 'milestone11') ?>

    <?php // echo $form->field($model, 'date11') ?>

    <?php // echo $form->field($model, 'milestone12') ?>

    <?php // echo $form->field($model, 'date12') ?>

    <?php // echo $form->field($model, 'milestone13') ?>

    <?php // echo $form->field($model, 'date13') ?>

    <?php // echo $form->field($model, 'milestone14') ?>

    <?php // echo $form->field($model, 'date14') ?>

    <?php // echo $form->field($model, 'milestone15') ?>

    <?php // echo $form->field($model, 'date15') ?>

    <?php // echo $form->field($model, 'milestone16') ?>

    <?php // echo $form->field($model, 'date16') ?>

    <?php // echo $form->field($model, 'milestone17') ?>

    <?php // echo $form->field($model, 'date17') ?>

    <?php // echo $form->field($model, 'milestone18') ?>

    <?php // echo $form->field($model, 'date18') ?>

    <?php // echo $form->field($model, 'milestone19') ?>

    <?php // echo $form->field($model, 'date19') ?>

    <?php // echo $form->field($model, 'milestone20') ?>

    <?php // echo $form->field($model, 'date20') ?>

    <?php // echo $form->field($model, 'milestone21') ?>

    <?php // echo $form->field($model, 'date21') ?>

    <?php // echo $form->field($model, 'milestone22') ?>

    <?php // echo $form->field($model, 'date22') ?>

    <?php // echo $form->field($model, 'milestone23') ?>

    <?php // echo $form->field($model, 'date23') ?>

    <?php // echo $form->field($model, 'milestone24') ?>

    <?php // echo $form->field($model, 'date24') ?>

    <?php // echo $form->field($model, 'milestone25') ?>

    <?php // echo $form->field($model, 'date25') ?>

    <?php // echo $form->field($model, 'milestone26') ?>

    <?php // echo $form->field($model, 'date26') ?>

    <?php // echo $form->field($model, 'milestone27') ?>

    <?php // echo $form->field($model, 'date27') ?>

    <?php // echo $form->field($model, 'milestone28') ?>

    <?php // echo $form->field($model, 'date28') ?>

    <?php // echo $form->field($model, 'milestone29') ?>

    <?php // echo $form->field($model, 'date29') ?>

    <?php // echo $form->field($model, 'milestone30') ?>

    <?php // echo $form->field($model, 'date30') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'creator') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
