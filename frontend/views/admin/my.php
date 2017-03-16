<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

// Url::to() calls UrlManager::createUrl() to create a URL
//$url = Url::to(['post/view', 'id' => 100]);
/* @var $this yii\web\View */
/* @var $model frontend\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<form action="index.php?r=admin/ha" method="post">
	<table>
		<tr>
			<td>用户名</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>密码</td>
			<td><input type="text" name="pwd"></td>
		</tr>
		<tr>
			<td><input type="submit" value="提交"></td>
			<td></td>
		</tr>
	</table>
</form>


