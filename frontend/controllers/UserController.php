<?php

namespace frontend\controllers;

use Yii;
use frontend\models\User;
//use frontend\models\search\AdminSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;



class UserController extends Controller{
	public $enableCsrfValidation=false;
	//简历
	public function actionResume(){
		return $this->renderPartial('jianli.html');
	}
	//我收藏的职位
	public function actionCollections(){
		return $this->renderPartial('collections.html');
	}

	public function actionDelivery(){
		return $this->renderPartial('delivery.html');
	}


}