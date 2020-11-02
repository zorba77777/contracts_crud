<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contract */
/* @var $form yii\widgets\ActiveForm */
/* @var $branches array */
/* @var $users array */
/* @var $statuses array */
?>

<div class="contract-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'counterparty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch')->dropDownList($branches); ?>

    <?= $form->field($model, 'lawyer')->dropDownList($users); ?>

    <?= $form->field($model, 'status')->dropDownList($statuses); ?>

    <?= $form->field($model, 'start_date')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['placeholder' => '2020-01-01'],
    ]) ?>

    <?= $form->field($model, 'milestone1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date1')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['placeholder' => '2020-01-01'],
    ]) ?>

    <?php for ($i = 2; $i <= 30; $i++): ?>

        <?php
        $milestone = 'milestone' . $i;
        $date = 'date' . $i;
        ?>

        <?php if ($model->$milestone || $model->$date): ?>

            <?= $form->field($model, $milestone)->textarea(['rows' => 6]) ?>

            <?= $form->field($model, $date)->widget(DatePicker::classname(), [
                'language' => 'ru',
                'dateFormat' => 'yyyy-MM-dd',
                'options' => ['placeholder' => '2020-01-01'],
            ]) ?>

        <?php else: ?>

            <div class="hidden">
                <?= $form->field($model, 'milestone' . $i)->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'date' . $i)->widget(DatePicker::classname(), [
                    'language' => 'ru',
                    'dateFormat' => 'yyyy-MM-dd',
                    'options' => ['placeholder' => '2020-01-01']
                ]) ?>
            </div>

        <?php endif ?>

    <?php endfor; ?>

    <?= Html::Button('Добавить веху', ['class' => 'btn btn-primary', 'id' => 'add']) ?>

    <?= $form->field($model, 'updated_at')->textInput(['readonly' => true, 'value' => date('Y-m-d')]) ?>

    <?php $model->creator = Yii::$app->user->identity->getId() ?>
    <?= $form->field($model, 'creator')->dropDownList($users, ['disabled' => true]); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
