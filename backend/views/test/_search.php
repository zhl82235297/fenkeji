<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\Test */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="test-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'describle') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'from') ?>

    <?php // echo $form->field($model, 'to') ?>

    <?php // echo $form->field($model, 'brand') ?>

    <?php // echo $form->field($model, 'teamtime') ?>

    <?php // echo $form->field($model, 'recom_key') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
