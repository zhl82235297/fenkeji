<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property integer $id
 * @property string $title
 * @property string $describle
 * @property string $price
 * @property string $from
 * @property string $to
 * @property string $brand
 * @property string $teamtime
 * @property string $recom_key
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['price'], 'number'],
            [['teamtime'], 'safe'],
            [['title', 'describle', 'from', 'to', 'brand', 'recom_key','img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'title' => '标题',
            'describle' => '描述',
            'price' => '价格',
            'from' => '从哪上传',
            'to' => '旅游景点',
            'brand' => '产品品牌',
            'teamtime' => '团期',
            'recom_key' => '推荐指数',
            'img' => '图片',
        ];
    }
}
