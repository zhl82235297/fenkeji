<?php

namespace backend\controllers;

use yii\web\Controller;
use \backend\models\CompanyProfile;


class CompanyController extends Controller

{
 
    public function actionEnt_list(){
    	//企業列表
        $model=new CompanyProfile();
        $data=$model->getAll();
        foreach ($data as $key => $v) {
            $data[$key]['addtime']=date('m-d H:i:s',$v['addtime']);
            $data[$key]['refreshtime']=date('m-d H:i:s',$v['refreshtime']);
        }
       
    	return $this->renderPartial('ent_list',['data'=>$data]);
    }
    
     public function actionSearch(){
      $model=new CompanyProfile();
      $cname=$model->attributes=$_GET['cname'];
      //print_r($cname);
       $res=$model->searchname($cname);
       
       if(empty($res)){
        
        echo 0;
       
       }else{
        
        echo json_encode($res);
       
       }

  
     }

     public function actionShan(){
        $model=new CompanyProfile();
        
        $id=$model->attributes=$_GET['id'];
        
        $res=$model->pi($id);
        
        if($res){
            echo 0;
        }else{
            echo 1;
        }
     }

     public  function actionDel(){
 
       $model=new CompanyProfile();
       $id=$model->attributes=$_GET['id'];
       $res=$model->upda($id);
       
       if($res){
      
     return $this->renderPartial('../success',array(    
                'message'=>'恭喜您，删除成功',    
                'links'=>array(    
                    array('返回主页','?r=company/ent_list'),    
                    array('返回详情','?r=company/ent_list&id='.$id),    
                ),    
            )); 


       }else{
        
      return $this->renderPartial('../success',array(    
                'message'=>'删除失败',    
                'links'=>array(    
                    array('返回主页','?r=company/ent_list'),    
                    array('返回详情','?r=company/ent_list&id='.$id),    
                ),    
            )); 

       }

     }
    





    public function actionEnt_promotion(){
    	//企業推廣
    	return $this->renderPartial('ent_promotion');
    }
    public function actionIncrement(){
    	//增值服務
    	return $this->renderPartial('increment');
    }
     public function actionJob_list(){

        //職位列表
        $model = new Position();
        $arr = $model->getAll();
        return $this->renderPartial('job_list',array('arr' => $arr));
    }
    public function actionMember(){
    	//企業会员
    	return $this->renderPartial('member');
    }
    public function actionOrder(){
    	//訂單管理
    	return $this->renderPartial('order');
    }

}