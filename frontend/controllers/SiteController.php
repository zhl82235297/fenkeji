<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\Site;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{   
    public $enableCsrfValidation=false;
    /**
     * @inheritdoc
     */
/*    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login','reg'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }*/

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {   
        //var_dump(YII::$app->session->get('user'));die;
        if(!empty(YII::$app->session->get('user'))){
            return $this->renderPartial('index.html');
        }else{
            return $this->redirect(['login']);
       }
        
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {   
        if(YII::$app->request->isPost){
            $post=YII::$app->request->post();
            $model=new site();
            $row=$model->find()->where(['email'=>$post['email']])->andWhere(['pwd'=>md5($post['pwd'])])->asArray()->one();
            if(!empty($row)){
                $session=Yii::$app->session;
                $session->set('user',$row);
                return $this->redirect(['site/index']);
            }else{
                return $this->redirect(['site/login']);
            }
        }else{
            return $this->renderPartial('login.html');
        }
    }


    public function actionReg(){
        if(YII::$app->request->isPost){
            $post=YII::$app->request->post();
            $data['pwd']=md5($post['pwd']);
            $data['email']=$post['email'];
            $data['type']=intval($post['type']);
            $data['add_time']=time();
            $data['last_login_time']=time();
            $userIP = Yii::$app->request->userIP;
            $data['last_login_ip']=$userIP;
            $model=new Site();
            $sql = "insert into fen_admin(name,email,pwd,type,add_time,last_time,last_ip)values('未起名','{$data['email']}','{$data['pwd']}','{$data['type']}','{$data['add_time']}','{$data['last_login_time']}','{$data['last_login_ip']}')";
            if(yii::$app->db->createCommand($sql)->execute()){
                $session=Yii::$app->session;
                $session->set('user',$data);
                return $this->redirect(['site/index']);
            }
        }else{
            //return $this->renderPartial('login.html');
            return $this->renderPartial('register.html');
        }

        
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }
        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
