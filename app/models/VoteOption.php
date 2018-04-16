<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%vote_option}}".
 *
 * @property int $option_id
 * @property int $vote_id
 * @property string $option_name
 * @property string $option_count
 * @property int $option_order
 */
class VoteOption extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%vote_option}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vote_id', 'option_count'], 'integer'],
            [['option_name'], 'string', 'max' => 250],
            [['option_order'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'option_id' => 'Option ID',
            'vote_id' => 'Vote ID',
            'option_name' => 'Option Name',
            'option_count' => 'Option Count',
            'option_order' => 'Option Order',
        ];
    }
}
