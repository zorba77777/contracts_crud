<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $contract app\models\Contract */
/* @var $events array */
/* @var $form yii\widgets\ActiveForm */
/* @var $branches array */
/* @var $users array */
/* @var $statuses array */
?>

<div class="contract-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $contract->lawyer = Yii::$app->user->identity->getId() ?>
    <?php $contract->creator = Yii::$app->user->identity->getId() ?>
    <?php $contract->start_date = date('Y-m-d'); ?>

    <?= $form->field($contract, 'counterparty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($contract, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($contract, 'branch')->dropDownList($branches, ['prompt' => '- Выберите филиал / СП -']); ?>

    <?= $form->field($contract, 'lawyer')->dropDownList($users); ?>

    <?php $contract->status = 2 ?>
    <?= $form->field($contract, 'status')->dropDownList($statuses); ?>

    <?= $form->field($contract, 'start_date')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['placeholder' => '9999-99-99'],
    ]) ?>

    <?= $form->field($contract, 'check_date')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['placeholder' => '9999-99-99'],
    ]) ?>

    <?php $events[0]->date = date('Y-m-d'); ?>

    <?= $form->field($events[0], 'content')->textarea(['rows' => 6, 'name' => 'content' . 0])->label('Веха' . 1) ?>

    <?= $form->field($events[0], 'date')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['placeholder' => '9999-99-99', 'name' => 'date' . 0, 'id' => 'date' . 0]
    ])->label('Дата' . 1) ?>

    <?= $form->field($events[0], 'ordinal_number')->hiddenInput(['value' => 0, 'name' => 'ordinalNumber' . 0])->label(false); ?>

    <?php for ($i = 1; $i < 30; $i++): ?>

        <div class="hidden">
            <?php $events[$i]->date = date('Y-m-d'); ?>

            <?= $form->field($events[$i], 'content')->textarea(['rows' => 6, 'name' => 'content' . $i])->label('Веха' . ($i + 1)) ?>

            <?= $form->field($events[$i], 'date')->widget(DatePicker::classname(), [
                'language' => 'ru',
                'dateFormat' => 'yyyy-MM-dd',
                'options' => ['placeholder' => '9999-99-99', 'name' => 'date' . $i, 'id' => 'date' . $i]
            ])->label('Дата' . ($i + 1)) ?>

            <?= $form->field($events[$i], 'ordinal_number')->hiddenInput(['value' => $i, 'name' => 'ordinalNumber' . $i])->label(false); ?>

        </div>

    <?php endfor; ?>

    <?= Html::Button('Добавить веху', ['class' => 'btn btn-primary', 'id' => 'add']) ?>

    <?= $form->field($contract, 'creator')->dropDownList($users); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить и сбросить фильтр', ['class' => 'btn btn-success', 'name' => 'reset filter']) ?>
        <?= Html::submitButton('Сохранить и оставить фильтр', ['class' => 'btn btn-success', 'name' => 'save filter']) ?>
        <?= Html::submitButton('Сохранить и перейти на страницу элемента', ['class' => 'btn btn-success', 'name' => 'go to element page']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
