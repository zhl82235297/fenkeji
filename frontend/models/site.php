<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%admin}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $pwd
 * @property integer $type
 * @property integer $last_time
 * @property integer $add_time
 * @property string $last_ip
 */
class site extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admin}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'pwd', 'last_time', 'add_time', 'last_ip'], 'required'],
<<<<<<< HEAD
            [['type','add_time'], 'integer'],
=======
            [['type', 'last_time', 'add_time'], 'integer'],
>>>>>>> c3acbf38914fd6c888a306dd346202ed46e735d3
            [['name', 'email'], 'string', 'max' => 40],
            [['pwd'], 'string', 'max' => 32],
            [['last_ip'], 'string', 'max' => 15]
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
            'email' => 'Email',
            'pwd' => 'Pwd',
            'type' => 'Type',
            'last_time' => 'Last Time',
            'add_time' => 'Add Time',
            'last_ip' => 'Last Ip',
        ];
    }
}
