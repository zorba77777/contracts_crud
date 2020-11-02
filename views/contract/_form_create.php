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

    <?= $form->field($model, 'branch')->dropDownList($branches, ['prompt' => '- Выберите филиал / СП -']); ?>

    <?php $model->lawyer = Yii::$app->user->identity->getId() ?>
    <?= $form->field($model, 'lawyer')->dropDownList($users); ?>

    <?php $model->status = 2 ?>
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

        <div class="hidden">
            <?= $form->field($model, 'milestone' . $i)->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'date' . $i)->widget(DatePicker::classname(), [
                'language' => 'ru',
                'dateFormat' => 'yyyy-MM-dd',
                'options' => ['placeholder' => '2020-01-01']
            ]) ?>
        </div>

    <?php endfor; ?>

    <?= Html::Button('Добавить веху', ['class' => 'btn btn-primary', 'id' => 'add']) ?>

    <?php $model->creator = Yii::$app->user->identity->getId() ?>
    <?= $form->field($model, 'creator')->dropDownList($users); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
