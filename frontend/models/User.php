<?php

namespace frontend\models;

use Yii;
use \yii\db\ActiveRecord;
/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $pwd
 * @property string $email
 */
class User extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
            [['pwd'], 'string', 'max' => 32],
            [['email'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'pwd' => 'Pwd',
            'email' => 'Email',
        ];
    }
    /*public function add($data){//DAO模式
        $sql = "insert into yii_news(title,content)values('{$data['title']}','{$data['content']}')";
        return yii::$app->db->createCommand($sql)->execute();
    }*/
    public function create($data)//AR模式1
    {
        
        $this->setAttributes($data);//载入数据
        return $this->insert();//返回结果
        
    } 
}
