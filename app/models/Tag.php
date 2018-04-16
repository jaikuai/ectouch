<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%tag}}".
 *
 * @property int $tag_id
 * @property string $user_id
 * @property string $goods_id
 * @property string $tag_words
 */
class Tag extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tag}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'goods_id'], 'integer'],
            [['tag_words'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tag_id' => 'Tag ID',
            'user_id' => 'User ID',
            'goods_id' => 'Goods ID',
            'tag_words' => 'Tag Words',
        ];
    }
}
