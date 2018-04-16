<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%vote}}".
 *
 * @property int $vote_id
 * @property string $vote_name
 * @property string $start_time
 * @property string $end_time
 * @property int $can_multi
 * @property string $vote_count
 */
class Vote extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%vote}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_time', 'end_time', 'vote_count'], 'integer'],
            [['vote_name'], 'string', 'max' => 250],
            [['can_multi'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vote_id' => 'Vote ID',
            'vote_name' => 'Vote Name',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'can_multi' => 'Can Multi',
            'vote_count' => 'Vote Count',
        ];
    }
}
