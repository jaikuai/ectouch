<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%ad_position}}".
 *
 * @property int $position_id
 * @property string $position_name
 * @property int $ad_width
 * @property int $ad_height
 * @property string $position_desc
 * @property string $position_style
 */
class AdPosition extends Model
{
    protected $table = 'ad_position';

    protected $pk = 'position_id';

}
