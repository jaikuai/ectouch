<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%admin_log}}".
 *
 * @property string $log_id
 * @property string $log_time
 * @property int $user_id
 * @property string $log_info
 * @property string $ip_address
 */
class AdminLog extends Model
{
    protected $table = 'admin_log';

    protected $pk = 'log_id';

}
