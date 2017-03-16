<?php
namespace frontend\controllers;
header('content-type:text\html;charset=utf-8');

use Yii;
use frontend\models\Zhou1;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\base\Model;
use frontend\models\Upload;
use yii\web\UploadedFile;

class Zhou1Controller extends Controller{
	public $enableCsrfValidation=false;

	public function actionIndex(){
		return $this->renderPartial('form.html');
	}

	public function actionAdd(){
		$data=array();
		$request=YII::$app->request;
		$file=$_FILES['file'];
		$path='/yii2/advanced/uploads/'.$file['name'];
		var_dump($file);die;
		move_uploaded_file($file['tmp_name'],$path);
		$data=$request->post();
		$data['img']=$path;
		$model=new Zhou1();
		if($model->create($data)){
			$this->get_list();
		}
	}

	public function actionGet_list(){
		$model=new Zhou1();
		$data=$model->find()->orderBy('sort DESC,is_commend desc')->asArray()->all();
		return $this->render('list.html',array('data'=>$data));
	}

	public function actionSearch(){
		$model=new Zhou1();
		$data=$model->find()->where(['is_commend'=>1])->orderBy('sort DESC')->asArray()->all();
		return $this->render('list1.html',array('data'=>$data));
	}
}