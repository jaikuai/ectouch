<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%admin_user}}".
 *
 * @property int $user_id
 * @property string $user_name
 * @property string $email
 * @property string $password
 * @property string $ec_salt
 * @property int $add_time
 * @property int $last_login
 * @property string $last_ip
 * @property string $action_list
 * @property string $nav_list
 * @property string $lang_type
 * @property int $agency_id
 * @property int $suppliers_id
 * @property string $todolist
 * @property int $role_id
 */
class AdminUser extends Model
{
    protected $table = 'admin_user';

    protected $pk = 'user_id';

}
