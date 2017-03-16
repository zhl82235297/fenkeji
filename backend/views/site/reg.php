<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\assets\Login;
/* @var $this yii\web\View */
/* @var $model backend\models\Admin */
/* @var $form ActiveForm */
Login::register($this);
?>
<div class="reg">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'admin_name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'pwd') ?>
        
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- reg -->