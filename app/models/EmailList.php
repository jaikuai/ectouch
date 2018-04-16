<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%email_list}}".
 *
 * @property int $id
 * @property string $email
 * @property int $stat
 * @property string $hash
 */
class EmailList extends Model
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%email_list}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'hash'], 'required'],
            [['email'], 'string', 'max' => 60],
            [['stat'], 'string', 'max' => 1],
            [['hash'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'stat' => 'Stat',
            'hash' => 'Hash',
        ];
    }
}
