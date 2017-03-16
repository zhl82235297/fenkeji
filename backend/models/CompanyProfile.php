<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%company_profile}}".
 *
 * @property integer $id
 * @property string $companyname
 * @property string $trade_cn
 * @property string $address
 * @property string $contact
 * @property string $telephone
 * @property string $email
 * @property integer $audit
 * @property integer $addtime
 * @property integer $refreshtime
 * @property integer $click
 * @property integer $comment
 * @property string $trade
 * @property string $contents
 * @property integer $famous
 */
class CompanyProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%company_profile}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['audit', 'addtime', 'refreshtime', 'click', 'comment', 'famous'], 'integer'],
            [['companyname', 'trade_cn', 'address', 'contact', 'telephone', 'email', 'trade', 'contents'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'companyname' => 'Companyname',
            'trade_cn' => 'Trade Cn',
            'address' => 'Address',
            'contact' => 'Contact',
            'telephone' => 'Telephone',
            'email' => 'Email',
            'audit' => 'Audit',
            'addtime' => 'Addtime',
            'refreshtime' => 'Refreshtime',
            'click' => 'Click',
            'comment' => 'Comment',
            'trade' => 'Trade',
            'contents' => 'Contents',
            'famous' => 'Famous',
        ];
    }
   
    public function getALL(){
        $sql="select*from fen_company_profile where state=1";
        return yii::$app->db->createCommand($sql)->queryAll();
    }
    public function Searchname($cname){

        $sql="select*from fen_company_profile where companyname='$cname'";

        return yii::$app->db->createCommand($sql)->queryOne();
    }

    public function Upda($id){

        $sql="update fen_company_profile set state=0 where id='$id'";

        return yii::$app->db->createCommand($sql)->execute();
    }
     public function Pi($id){

        $sql="update fen_company_profile set state=0 where id in($id)";

        return yii::$app->db->createCommand($sql)->execute();
        // if($res){

        //     $sql="select*from fen_company_profile where state=1";
        //     return yii::$app->db->createCommand($sql)->queryAll();

        // }
    }
}
