<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%account_log}}".
 *
 * @property string $log_id
 * @property string $user_id
 * @property string $user_money
 * @property string $frozen_money
 * @property int $rank_points
 * @property int $pay_points
 * @property string $change_time
 * @property string $change_desc
 * @property int $change_type
 */
class AccountLog extends Model
{
    protected $table = 'account_log';

    protected $pk = 'log_id';

}
