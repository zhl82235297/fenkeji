<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\Navigation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="navigation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'alias') ?>

    <?= $form->field($model, 'urltype') ?>

    <?= $form->field($model, 'display') ?>

    <?= $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'pagealias') ?>

    <?php // echo $form->field($model, 'list_id') ?>

    <?php // echo $form->field($model, 'tag') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'target') ?>

    <?php // echo $form->field($model, 'navigationorder') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
