<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%ad_custom}}".
 *
 * @property string $ad_id
 * @property int $ad_type
 * @property string $ad_name
 * @property string $add_time
 * @property string $content
 * @property string $url
 * @property int $ad_status
 */
class AdCustom extends Model
{
    protected $table = 'ad_custom';

    protected $pk = 'ad_id';

}
