<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%snatch_log}}".
 *
 * @property string $log_id
 * @property int $snatch_id
 * @property string $user_id
 * @property string $bid_price
 * @property string $bid_time
 */
class SnatchLog extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%snatch_log}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'bid_time'], 'integer'],
            [['bid_price'], 'number'],
            [['snatch_id'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'log_id' => 'Log ID',
            'snatch_id' => 'Snatch ID',
            'user_id' => 'User ID',
            'bid_price' => 'Bid Price',
            'bid_time' => 'Bid Time',
        ];
    }
}
