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

    <?= $form->field($contract, 'counterparty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($contract, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($contract, 'branch')->dropDownList($branches, ['prompt' => '- Выберите филиал / СП -']); ?>

    <?= $form->field($contract, 'lawyer')->dropDownList($users); ?>

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

    <?php for ($i = 0; $i < 30; $i++): ?>

        <?php if (!$events[$i]->date && !$events[$i]->content): ?>
            <div class="hidden">
                <?= $form->field($events[$i], 'content')->textarea(['rows' => 6, 'name' => 'content' . $i])->label('Веха' . ($i + 1)) ?>

                <?= $form->field($events[$i], 'date')->widget(DatePicker::classname(), [
                    'language' => 'ru',
                    'dateFormat' => 'yyyy-MM-dd',
                    'options' => ['placeholder' => '9999-99-99', 'name' => 'date' . $i, 'id' => 'date' . $i]
                ])->label('Дата' . ($i + 1)) ?>

                <?= $form->field($events[$i], 'ordinal_number')->hiddenInput(['value' => $i, 'name' => 'ordinalNumber' . $i])->label(false); ?>
            </div>
        <?php else: ?>
            <?= $form->field($events[$i], 'content')->textarea(['rows' => 6, 'name' => 'content' . $i])->label('Веха' . ($i + 1)) ?>

            <?= $form->field($events[$i], 'date')->widget(DatePicker::classname(), [
                'language' => 'ru',
                'dateFormat' => 'yyyy-MM-dd',
                'options' => ['placeholder' => '9999-99-99', 'name' => 'date' . $i, 'id' => 'date' . $i]
            ])->label('Дата' . ($i + 1)) ?>

            <?= $form->field($events[$i], 'ordinal_number')->hiddenInput(['value' => $i, 'name' => 'ordinalNumber' . $i])->label(false); ?>
        <?php endif ?>

    <?php endfor; ?>

    <?= Html::Button('Добавить веху', ['class' => 'btn btn-primary', 'id' => 'add']) ?>

    <?= $form->field($contract, 'updated_at')->textInput(['readonly' => true, 'value' => date('Y-m-d')]) ?>

    <?php $contract->creator = Yii::$app->user->identity->getId() ?>
    <?= $form->field($contract, 'creator')->dropDownList($users); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
