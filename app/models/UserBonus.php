<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%user_bonus}}".
 *
 * @property string $bonus_id
 * @property int $bonus_type_id
 * @property string $bonus_sn
 * @property string $user_id
 * @property string $used_time
 * @property string $order_id
 * @property int $emailed
 */
class UserBonus extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_bonus}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bonus_sn', 'user_id', 'used_time', 'order_id'], 'integer'],
            [['bonus_type_id', 'emailed'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bonus_id' => 'Bonus ID',
            'bonus_type_id' => 'Bonus Type ID',
            'bonus_sn' => 'Bonus Sn',
            'user_id' => 'User ID',
            'used_time' => 'Used Time',
            'order_id' => 'Order ID',
            'emailed' => 'Emailed',
        ];
    }
}
