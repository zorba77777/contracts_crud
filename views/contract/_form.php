<?php

use yii\db\Expression;
use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contract */
/* @var $form yii\widgets\ActiveForm */
/* @var $branches array */
/* @var $users array */
?>

<div class="contract-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'counterparty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch')->dropDownList($branches); ?>

    <?= $form->field($model, 'lawyer')->dropDownList($users); ?>

    <?= $form->field($model, 'status')->dropDownList(['в работе' => 'в работе', 'завершено' => 'завершено', 'снято' => 'снято']); ?>

    <?= $form->field($model, 'start_date')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date1')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>
    <?= $form->field($model, 'milestone2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date2')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>
    <?= $form->field($model, 'milestone3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date3')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>
    <?= $form->field($model, 'milestone4')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date4')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>
    <?= $form->field($model, 'milestone5')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date5')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>
    <?= $form->field($model, 'milestone6')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date6')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>
    <?= $form->field($model, 'milestone7')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date7')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>
    <?= $form->field($model, 'milestone8')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date8')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>
    <?= $form->field($model, 'milestone9')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date9')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>
    <?= $form->field($model, 'milestone10')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date10')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone11')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date11')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone12')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date12')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone13')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date13')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone14')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date14')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone15')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date15')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone16')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date16')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone17')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date17')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone18')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date18')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone19')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date19')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>
    <?= $form->field($model, 'milestone20')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date20')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone21')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date21')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone22')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date22')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone23')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date23')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone24')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date24')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone25')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date25')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone26')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date26')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone27')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date27')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone28')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date28')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone29')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date29')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'milestone30')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date30')->widget(DatePicker::classname(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'creator')->textInput(['readonly' => true, 'value' => Yii::$app->user->identity->getId()]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
