<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%admin_message}}".
 *
 * @property int $message_id
 * @property int $sender_id
 * @property int $receiver_id
 * @property string $sent_time
 * @property string $read_time
 * @property int $readed
 * @property int $deleted
 * @property string $title
 * @property string $message
 */
class AdminMessage extends Model
{
    protected $table = 'admin_message';

    protected $pk = 'message_id';

}
