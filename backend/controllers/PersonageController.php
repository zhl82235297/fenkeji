<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\Admin;

class PersonageController extends Controller
{
	//简历列表
    public function actionPerl()
    {
        $sql="select * from fen_resume";
        $arr=yii::$app->db->createCommand($sql)->queryAll();
        return $this->renderPartial('index',['arr'=>$arr]);
    }

    //个人会员
    public function actionMember(){
        $models=new Admin();
        $data=$models->getAll();
       // var_dump($data);die;
    	return $this->renderPartial('member_list',['data'=>$data]);
    }

    public function actionMemberdelete(){
        $id=$_GET['id'];
        //var_dump($id);die;
        $models=new Admin();
        $re=$models->del1($id);
        if($re){           
       return $this->renderPartial('../success',array(    
                'message'=>'恭喜您，删除成功',    
                'links'=>array(    
                    array('返回主页','?r=personage/member'),    
                    array('返回详情','?r=order/order_set_per&id='.$id),    
                ),    
            )); 
        }

    }


    //个人推广
    public function actionProm(){
    	return $this->renderPartial('promotion');
    }

    //职位订阅
    public function actionSubscribe(){
    	return $this->renderPartial('take');
    }

}
