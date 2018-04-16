<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%collect_goods}}".
 *
 * @property string $rec_id
 * @property string $user_id
 * @property string $goods_id
 * @property string $add_time
 * @property int $is_attention
 */
class CollectGoods extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%collect_goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'goods_id', 'add_time'], 'integer'],
            [['is_attention'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rec_id' => 'Rec ID',
            'user_id' => 'User ID',
            'goods_id' => 'Goods ID',
            'add_time' => 'Add Time',
            'is_attention' => 'Is Attention',
        ];
    }
}
