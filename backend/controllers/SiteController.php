<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [ //检测规则
                    [ //第1条规则
                        'roles' => ['@'], //角色集合，@表示登录用户
                        'allow' => true, //是否允许访问
                    ],
                        
                    [ //第2条规则
                        'actions' => ['login', 'reg','error'], //针对本控制器的哪些方法ID生效，这两个ID就是针对actionLogin和actionRegister两个方法生效
                        'roles' => ['?'], //? 表示未登录用户
                        'allow' => true, //允许未登录用户访问
                    ],
                ],
            ],
            /*'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],*/
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    //主页
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
    //主页左侧部分
    public function actionRight(){
        return $this->renderPartial('right');
    }
    //主页左侧部分
    public function actionRight1(){
        return $this->renderPartial('right1');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionReg()
    {
        $model = new Admin(); 
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $data=Yii::$app->request->post()['Admin'];
            $sql="select admin_name from fen_admin where admin_name='{$data['admin_name']}'";
            $row=$model->getOne2($sql);
           /* if ($row) {
                throw new NotFoundHttpException('帐号已经注册');
            }else{*/
                $data['pwd']=md5($data['pwd']);
                $data['purview']='all';
                $data['rank']='超级管理员';
                $data['add_time']=time();
                if ($model->create1($data)) {
                    return $this->render('../success',array(    
                        'message'=>'恭喜您，注册成功',    
                        'links'=>array(    
                            array('立即登录','site/login'),    
                            array('查看主页','site/index'),    
                        ),    
                    )); 
                }else{
                    throw new NotFoundHttpException('注册失败 ');
                }
            /*}*/
 
        } else {
            return $this->render('reg',['model' => $model]);
        }  
        
    }
}
