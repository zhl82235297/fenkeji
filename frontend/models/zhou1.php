<?php

namespace frontend\models;

use Yii;
use \yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%zhou1}}".
 *
 * @property integer $id
 * @property string $rote
 * @property integer $is_commend
 * @property integer $sort
 */
class Zhou1 extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%zhou1}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort'], 'integer'],
            [['is_commend','rote','myfile'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'rote' => 'rote',
            'is_commend' => 'is_commend',
            'sort' => 'sort',
            'myfile' => 'myfile',
        ];
    }

    public function create($data){
        $this->setAttributes($data);
        return $this->insert();
    }
}
