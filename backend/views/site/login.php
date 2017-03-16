<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\assets\Login;
Login::register($this);
$this->title = '后台登录';
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="page-container">

            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->label('用户名')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->label('密码')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->label('7天免登录')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('登录', ['class' => 'submit_button', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>

    <div class="error"><span>+</span></div>
    </div>

