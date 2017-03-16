<?php

namespace frontend\controllers;

use Yii;
use frontend\models\User;
//use frontend\models\search\AdminSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;



class CompanyController extends Controller{
	public $enableCsrfValidation=false;

	public function actionCompany(){
		$this->renderPartial('company.html');
	}

	public function actionCompanylist(){
		return $this->renderPartial('companylist.html');
	}
}