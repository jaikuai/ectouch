<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%admin_action}}".
 *
 * @property int $action_id
 * @property int $parent_id
 * @property string $action_code
 * @property string $relevance
 */
class AdminAction extends Model
{
    protected $table = 'admin_action';

    protected $pk = 'action_id';

}
