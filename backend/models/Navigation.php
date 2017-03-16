<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%navigation}}".
 *
 * @property string $id
 * @property string $alias
 * @property integer $urltype
 * @property integer $display
 * @property string $title
 * @property string $color
 * @property string $pagealias
 * @property string $list_id
 * @property string $tag
 * @property string $url
 * @property string $target
 * @property string $navigationorder
 */
class Navigation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%navigation}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'title', 'color', 'pagealias', 'list_id', 'tag', 'url', 'target'], 'required'],
            [['urltype', 'display', 'navigationorder'], 'integer'],
            [['alias', 'title', 'pagealias', 'tag', 'target'], 'string', 'max' => 100],
            [['color', 'list_id'], 'string', 'max' => 30],
            [['url'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => 'Alias',
            'urltype' => 'Urltype',
            'display' => 'Display',
            'title' => 'Title',
            'color' => 'Color',
            'pagealias' => 'Pagealias',
            'list_id' => 'List ID',
            'tag' => 'Tag',
            'url' => 'Url',
            'target' => 'Target',
            'navigationorder' => 'Navigationorder',
        ];
    }
}
